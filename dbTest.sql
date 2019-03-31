-- Get a list of databases
SELECT name FROM sys.databases
GO

use HRIS

SELECT * from information_schema.TABLEs

-- Get a list of tables and views in the current database
SELECT table_catalog [database], table_schema [schema], table_name name, table_type type
FROM INFORMATION_SCHEMA.TABLES
GO

SELECT id, seq_no, prefix_code, prefix_name, prefix_abbr_name, is_active FROM ganeral_perfix

SELECT id, organization_part_code, organization_part_name, organization_part_abbr_name FROM organization_part WHERE organization_part_abbr_name Like '%m%'

SELECT id, organization_part_code, organization_part_name, organization_part_abbr_name  FROM organization_part WHERE id = 6

SELECT id, organization_part_code, organization_part_name, organization_part_abbr_name, status FROM organization_part WHERE 1=1 AND (organization_part_name Like N'%ส%' OR organization_part_abbr_name Like N'%ส%')