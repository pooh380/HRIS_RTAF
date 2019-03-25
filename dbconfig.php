-- Get a list of databases
SELECT name FROM sys.databases
GO

use HRIS_RTAF

SELECT * from information_schema.TABLEs

-- Get a list of tables and views in the current database
SELECT table_catalog [database], table_schema [schema], table_name name, table_type type
FROM INFORMATION_SCHEMA.TABLES
GO

SELECT army_name From army