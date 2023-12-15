CREATE TABLE IF NOT EXISTS Transactions(
    Id int AUTO_INCREMENT PRIMARY KEY,
    account_src int,
    account_dest int,
    balance_change int,
    transaction_type varchar(255),
    memo varchar(255),
    expected_total int,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (account_src) REFERENCES Accounts(id),
    FOREIGN KEY (account_dest) REFERENCES Accounts(id)
);