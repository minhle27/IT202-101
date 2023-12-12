INSERT INTO Users (id, email, password, username)
SELECT -1, 'system@admin.com', 'password', 'system_user'
WHERE NOT EXISTS (SELECT * FROM Users WHERE id = -1);