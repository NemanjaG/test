CREATE TABLE: 

	1.Napraviti tabelu countries, koja treba da izgleda ovako: 
	Napomena, treba staviti zabranu za null. 

	mysql> desc countries;
	+--------------+---------------+------+-----+---------+-------+
	| Field        | Type          | Null | Key | Default | Extra |
	+--------------+---------------+------+-----+---------+-------+
	| COUNTRY_ID   | varchar(2)    | NO   |     | NULL    |       |
	| COUNTRY_NAME | varchar(40)   | NO   |     | NULL    |       |
	| REGION_ID    | decimal(10,0) | NO   |     | NULL    |       |
	+--------------+---------------+------+-----+---------+-------+

	2. Napraviti tabelu countries, samo sto u ovom slucaju country_id ce biti unikatan i imace vrednost auto_increment. 

	mysql> DESC countries;
	+--------------+---------------+------+-----+---------+-------+
	| Field        | Type          | Null | Key | Default | Extra |
	+--------------+---------------+------+-----+---------+-------+
	| COUNTRY_ID   | varchar(2)    | NO   | PRI |         |       |
	| COUNTRY_NAME | varchar(40)   | YES  |     | NULL    |       |
	| REGION_ID    | decimal(10,0) | YES  |     | NULL    |       |
	+--------------+---------------+------+-----+---------+-------+

INSERT:

	1. Koristeci INSERT, ubacite podatke iz tabele u countries tabelu.

	+------------+--------------+-----------+
	| COUNTRY_ID | COUNTRY_NAME | REGION_ID |
	+------------+--------------+-----------+
	| C1         | India        |      1001 |
	+------------+--------------+-----------+

	1.1 
	Sa jednom INSERT komandom, ubacite 3 reda vrednosti:
	+------------+--------------+-----------+
	| COUNTRY_ID | COUNTRY_NAME | REGION_ID |
	+------------+--------------+-----------+
	| C2         | China        |      1002 |
	| C3         | USA          |      1003 |
	| C4         | UK           |      1004 |
	+------------+--------------+-----------+

	2. Koristeci INSERT, kopirajte sadrzaj countries tabele u countries_new. 
	Kako treba da izgleda posle:

	mysql> SELECT * FROM country_new;
	+------------+--------------+-----------+
	| COUNTRY_ID | COUNTRY_NAME | REGION_ID |
	+------------+--------------+-----------+
	| C0001      | India        |      1001 |
	| C0002      | USA          |      1007 |
	| C0003      | UK           |      1003 |
	+------------+--------------+-----------+


UPDATE:

	1. Koristeci update, u tabeli ispod podesite email kolonu na 'not available' za sve korisnike: 

	+-------------+------------+-----------+---------------+--------------+------------+---------+----------+----------------+------------+---------------+
	| EMPLOYEE_ID | FIRST_NAME | LAST_NAME | EMAIL         | PHONE_NUMBER | HIRE_DATE  | JOB_ID  | SALARY   | COMMISSION_PCT | MANAGER_ID | DEPARTMENT_ID |
	+-------------+------------+-----------+---------------+--------------+------------+---------+----------+----------------+------------+---------------+
	|         100 | Steven     | King      | not available | 515.123.4567 | 1987-06-17 | AD_PRES | 24000.00 |           0.00 |          0 |            90 |
	|         101 | Neena      | Kochhar   | not available | 515.123.4568 | 1987-06-18 | AD_VP   | 17000.00 |           0.00 |        100 |            90 |
	+-------------+------------+-----------+---------------+--------------+------------+---------+----------+----------------+------------+---------------+

	1.1 Koristeci update, u tabeli ispod podesite email kolonu na 'available', i podesite kolonu commision_pct na 0.10 za sve korisnike ciji department_id je 110.


	+-------------+------------+-----------+---------------+--------------+------------+------------+----------+----------------+------------+---------------+
	| EMPLOYEE_ID | FIRST_NAME | LAST_NAME | EMAIL         | PHONE_NUMBER | HIRE_DATE  | JOB_ID     | SALARY   | COMMISSION_PCT | MANAGER_ID | DEPARTMENT_ID |
	+-------------+------------+-----------+---------------+--------------+------------+------------+----------+----------------+------------+---------------+
	|         205 | Shelley    | Higgins   | not available | 515.123.8080 | 1987-09-30 | AC_MGR     | 12000.00 |           0.10 |        101 |           110 |
	|         206 | William    | Gietz     | not available | 515.123.8181 | 1987-10-01 | AC_ACCOUNT |  8300.00 |           0.10 |        205 |           110 |
	+-------------+------------+-----------+---------------+--------------+------------+------------+----------+----------------+------------+---------------+

	2. Pomocu update-a, promeniti salary zaposlenog u 8000 ciji id je 105, ako je trenutna plata manja od 5000.

	+-------------+-------------+-------------+----------+--------------------+------------+------------+----------+----------------+------------+---------------+
	| EMPLOYEE_ID | FIRST_NAME  | LAST_NAME   | EMAIL    | PHONE_NUMBER       | HIRE_DATE  | JOB_ID     | SALARY   | COMMISSION_PCT | MANAGER_ID | DEPARTMENT_ID |
	+-------------+-------------+-------------+----------+--------------------+------------+------------+----------+----------------+------------+---------------+
	|         100 | Steven      | King        | SKING    | 515.123.4567       | 1987-06-17 | AD_PRES    | 24000.00 |           0.00 |          0 |   		  90 |
	|         101 | Neena       | Kochhar     | NKOCHHAR | 515.123.4568       | 1987-06-18 | AD_VP      | 17000.00 |           0.00 |        100 |            90 |
	|         102 | Lex         | De Haan     | LDEHAAN  | 515.123.4569       | 1987-06-19 | AD_VP      | 17000.00 |           0.00 |        100 |            90 |
	|         103 | Alexander   | Hunold      | AHUNOLD  | 590.423.4567       | 1987-06-20 | IT_PROG    |  9000.00 |           0.00 |        102 |            60 |
	|         104 | Bruce       | Ernst       | BERNST   | 590.423.4568       | 1987-06-21 | IT_PROG    |  6000.00 |           0.00 |        103 |            60 |
	|         105 | David       | Austin      | DAUSTIN  | 590.423.4569       | 1987-06-22 | IT_PROG    |  4800.00 |           0.00 |        103 |            60 |
	+-------------+-------------+-------------+----------+--------------------+------------+------------+----------+----------------+------------+---------------+


ALTER:
	
	1. Pomocu alter-a, promeniti naziv tabele countries, u countries_new. Hint: Nije vam potrebna slika tabele.


	2. Pomocu alter-a, dodati kolonu region_id posle state_province u tabelu lokacije:
	+----------------+--------------+------+-----+---------+-------+
	| Field          | Type         | Null | Key | Default | Extra |
	+----------------+--------------+------+-----+---------+-------+
	| LOCATION_ID    | decimal(4,0) | YES  |     | NULL    |       |
	| STREET_ADDRESS | varchar(40)  | YES  |     | NULL    |       |
	| POSTAL_CODE    | varchar(12)  | YES  |     | NULL    |       |
	| CITY           | varchar(30)  | YES  |     | NULL    |       |
	| STATE_PROVINCE | varchar(25)  | YES  |     | NULL    |       |
	| COUNTRY_ID     | varchar(2)   | YES  |     | NULL    |       |
	+----------------+--------------+------+-----+---------+-------+


	3.Napisati alter pomocu kog cete promeniti country_id u integer. 

	mysql> SHOW COLUMNS FROM locations;
	+----------------+--------------+------+-----+---------+-------+
	| Field          | Type         | Null | Key | Default | Extra |
	+----------------+--------------+------+-----+---------+-------+
	| LOCATION_ID    | decimal(4,0) | YES  |     | NULL    |       |
	| STREET_ADDRESS | varchar(40)  | YES  |     | NULL    |       |
	| POSTAL_CODE    | varchar(12)  | YES  |     | NULL    |       |
	| CITY           | varchar(30)  | YES  |     | NULL    |       |
	| STATE_PROVINCE | varchar(25)  | YES  |     | NULL    |       |
	| COUNTRY_ID     | varchar(2)   | YES  |     | NULL    |       |
	+----------------+--------------+------+-----+---------+-------+

JOINS:

	Za ovaj slucaj cemo importovati bazu:  
	1.Napisite query da pronadjete adrese (location_id, street_address, city, state_province, country_name) svih department-a.
	Tabela location and country.


	Output treba ovako da izgleda:

	location_id		street_address			city				state_province			country_name

	1600			2007 Zagora St			South Brunswick		New Jersey			United States of America
	1700			2004 Charade Rd			Seattle				Washington			United States of America
	1800			147 Spadina Ave			Toronto				Ontario				Canada

	
	2.Napisite query da pronadjete ime(first_name, last name), department ID i department_name.


	Output treba ovako da izgleda:

	first_name	last_name	department_id	department_name
	Steven		King		90				Executive
	Neena		Kochhar		90				Executive
	Lex			De Haan		90				Executive	