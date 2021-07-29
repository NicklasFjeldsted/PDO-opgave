<?php

try {
    $conn = new PDO("mysql:host=localhost", "root", "");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE xyz_db";
    $conn->exec($sql);
    echo "Database created successfully";
}
catch (PDOException $e) {
     echo $sql . "<br>" . $e->getMessage();
}   

require_once "connection.php";

try {
    // Alle tables samlet i en query
    $sql = "
    CREATE TABLE PostNrBy(PostNr SMALLINT(4) NOT NULL, ByNavn VARCHAR(20) NOT NULL, UNIQUE (ByNavn), PRIMARY KEY (PostNr));

    CREATE TABLE Projekt(PNummer INT(6) NOT NULL AUTO_INCREMENT, ProjektNavn VARCHAR(30) NOT NULL, PostNr SMALLINT(4) NOT NULL, PRIMARY KEY (PNummer), FOREIGN KEY (PostNr) REFERENCES PostNrBy(PostNr));

    CREATE TABLE Afdeling(Afdelingsnummer INT(6) NOT NULL AUTO_INCREMENT, Afdelingsnavn VARCHAR(30) NOT NULL, PostNr SMALLINT(4) NOT NULL, PRIMARY KEY (Afdelingsnummer), FOREIGN KEY (PostNr) REFERENCES PostNrBy(PostNr));

    CREATE TABLE Job_titel(Titel VARCHAR(25) NOT NULL, Beskrivelse VARCHAR(255), PRIMARY KEY (Titel));

    CREATE TABLE Medarbejder_info(CPR INT(10) NOT NULL, Fornavn VARCHAR(20) NOT NULL, Efternavn VARCHAR(30) NOT NULL, TlfNr INT(8) NOT NULL, Titel VARCHAR(25) NOT NULL, PRIMARY KEY (TlfNr), FOREIGN KEY (Titel) REFERENCES Job_titel(Titel), UNIQUE (CPR));

    CREATE TABLE Medarbejder(person_ID INT(6) NOT NULL AUTO_INCREMENT, TlfNr INT(8) NOT NULL, TIMER INT(4), PRIMARY KEY (person_ID), FOREIGN KEY (TlfNr) REFERENCES Medarbejder_info(TlfNr));

    CREATE TABLE Projekt_deltagere(person_ID INT(6) NOT NULL, PNummer INT(6) NOT NULL, FOREIGN KEY (person_ID) REFERENCES Medarbejder(person_ID), FOREIGN KEY (PNummer) REFERENCES Projekt(PNummer));

    CREATE TABLE MedarbAFD(person_ID INT(6) NOT NULL, Afdelingsnummer INT(6) NOT NULL, FOREIGN KEY (person_ID) REFERENCES Medarbejder(person_ID), FOREIGN KEY (Afdelingsnummer) REFERENCES Afdeling(Afdelingsnummer));
    ";

    $conn->exec($sql);
    echo "All tables have been successfully created!";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null


?>