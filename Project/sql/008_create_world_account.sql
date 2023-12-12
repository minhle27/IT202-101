INSERT INTO Accounts (id, account_number, user_id, account_type)
SELECT -1, '000000000000', -1, 'world'
WHERE NOT EXISTS (SELECT * FROM Accounts WHERE account_number = '000000000000');