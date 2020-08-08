DELIMITER $$
CREATE PROCEDURE `pleaseWork4`(
IN `CapRemaining` INT,
IN `TeamID` VARCHAR(30),
OUT `ReturnPlayerName` varchar(50),
OUT `ReturnCap` INT,
 out StartingPoints Numeric(20,17) ,
out  EndingPoints Numeric(20,17)
)
BEGIN

      DECLARE  CountTeam INT ;
        DECLARE CountPlayer INT ;
        DECLARE lclSal INT ;
        DECLARE lclPlayerSalary INT ;
        DECLARE lclPlayerPos VARCHAR(2) ;
        DECLARE lclFPPG Numeric(20,17) ;
        DECLARE lclPlayer varchar(50) ;
        DECLARE lclReturnPlayer varchar(50) ;
        DECLARE lclTeamRosterPlayer varchar(50) ;
        DECLARE lclCap INT ;
        DECLARE lclPlyrFPPG Numeric(20,17);
        DECLARE FOUND varchar(50) ;
        DECLARE UTRP int;
    SET
        ReturnCap = 0 ;
    SET
        lclPlayer = '' ;
    SET
        lclReturnPlayer = '' ;
    SET
        lclTeamRosterPlayer = '' ;
    SET
        lclSal = 0 ;
    SET
        lclPlayerSalary = 0 ;
    SET
        lclCap = CapRemaining ;
    SET
        CountTeam = 0 ;
    SET
        CountPlayer = 0 ;
    SET
    UTRP=0;

    BEGIN

   create TEMPORARY Table IF NOT EXISTS temp_team (
Player varchar(50),
Pos varchar(2),
Sal int,
Points Numeric(20,17)
);

   Insert into temp_team (Player,Pos,Sal,Points)

   SELECT pl.Nickname,pl.Position,pl.Salary,pl.FPPG
  FROM save_table2 st, playerList pl
  WHERE st.TeamID=TeamID
  AND st.Player = pl.Nickname;

  set StartingPoints=(select sum(pl.FPPG) from playerList as pl
                     where pl.Nickname in (select Player from save_table2));
SET
    CountTeam =(
SELECT
    COUNT(*)
FROM
    temp_team
) ; teamloop:WHILE CountTeam > 0
DO
SET
    lclTeamRosterPlayer =(
    SELECT
        Player
    FROM
        temp_team
    LIMIT 1
) ;
SET
    lclPlayer =(
    SELECT
        Player
    FROM
        temp_team
    LIMIT 1
) ;
SET
    lclPlayerPos =(
    SELECT
        Pos
    FROM
        temp_team
    LIMIT 1
) ;
SET
    lclFPPG =(
    SELECT
        Points
    FROM
        temp_team
    LIMIT 1
) ;
SET
    lclPlayerSalary =(
    SELECT
        Sal
    FROM
        temp_team
    LIMIT 1
) ;
CREATE TEMPORARY TABLE IF NOT EXISTS temp_player(
    Player varchar(50),
    Pos VARCHAR(2),
    Sal INT,
    Points Numeric(20,17)
) ; INSERT INTO temp_player(Player, Pos, Sal, Points)
SELECT
    Nickname,
    Position,
    Salary,
    FPPG
FROM
    playerList
WHERE
    Position = lclPlayerPos AND FPPG > lclFPPG
ORDER BY
    FPPG
DESC
    ;
SET
    CountPlayer =(
    SELECT
        COUNT(*)
    FROM
        temp_player
) ; myloop: WHILE CountPlayer > 0
DO
SET
    lclPlayer =(
    SELECT
        Player
    FROM
        temp_player
    LIMIT 1
) ;
SET
    lclSal =(
    SELECT
        sal
    FROM
        temp_player
    LIMIT 1
) ;
SET
    lclPlyrFPPG =(
    SELECT
        Points
    FROM
        temp_player
    LIMIT 1
) ; IF(lclsal - lclPlayerSalary) < lclCap THEN
SET FOUND
    =(
    SELECT
        Player
    FROM
        save_table2
    WHERE
        Player = lclPlayer
    LIMIT 1
) ; IF FOUND IS NULL THEN
SET
    lclCap = lclCap -(lclsal - lclPlayerSalary) ;
SET
    lclReturnPlayer = lclPlayer ;
SET
    CountPlayer = 0 ; LEAVE myloop ;
END IF ;
END IF ;
DELETE
FROM
    temp_player
WHERE
    Player = lclPlayer ;
SET
    lclPlayer = '' ;
SET
    CountPlayer = CountPlayer -1 ;
END WHILE myloop ; /* END of player */
/*UPDATE
    save_table2
SET
    Player = lclReturnPlayer
WHERE
    Player = lclTeamRosterPlayer ;*/
    update save_table2
	          set save_table2.Player=lclReturnPlayer,
			      save_table2.Optimized='O'
			  Where save_table2.Player=lclTeamRosterPlayer;
DROP TABLE
    temp_player ;
DELETE
FROM
    temp_team
WHERE
    Player = lclTeamRosterPlayer ;
SET
    CountTeam = CountTeam -1 ;
END WHILE teamloop ;
set EndingPoints=(select sum(pl.FPPG) from playerList as pl
                     where pl.Nickname in (select Player from save_table2));
 SET   ReturnCap = lclCap ;
SET
	ReturnPlayerName = lclReturnPlayer;
    set UTRP=(SELECT count(*) from RosterPoints where UserTeamID = TeamID);

if UTRP=0
then

insert into RosterPoints(UserTeamID, StartingPoints,EndingPoints,CapRemaining)
values (TeamID,StartingPoints,EndingPoints,lclCap);
end if;

IF UTRP > 0
then
update RosterPoints
set StartingPoints=StartingPoints,
EndingPoints=EndingPoints,
CapRemaining=lclCap
Where UserTeamID=TeamID;
end if;

	Set ReturnCap = lclCap;
    DROP TABLE temp_team;
END;
END$$
DELIMITER ;
