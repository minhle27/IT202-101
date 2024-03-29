<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Bank Project</td></tr>
<tr><td> <em>Student: </em> Minh Le (mql)</td></tr>
<tr><td> <em>Generated: </em> 12/14/2023 9:57:20 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-101-F23/it202-milestone-2-bank-project/grade/mql" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Create Accounts table and setup </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot from the db of the system user (Users table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-14T21.14.06Screenshot%202023-12-14%20at%2016.13.28.png.webp?alt=media&token=da49aee0-6700-47f1-9482-2e768a9ee7c9"/></td></tr>
<tr><td> <em>Caption:</em> <p>System user with id -1<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot from the db of the world account (Accounts table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-14T22.43.36Screenshot%202023-12-14%20at%2017.43.01.png.webp?alt=media&token=e9c42d4c-daa0-435b-8494-09a31b38108c"/></td></tr>
<tr><td> <em>Caption:</em> <p>world account with id -1, associated with system user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain the purpose and usage of these two entries and how they relate</td></tr>
<tr><td> <em>Response:</em> <p>In this setup, world account is associated with system user. They are needed<br>for transactions because a transaction must be recorded by a pair of a<br>source account and a destination account. This is especially useful when users make<br>a deposit or withdrawal in the application<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/minhle27/IT202-101/pull/8">https://github.com/minhle27/IT202-101/pull/8</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Dashboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the requested links/navigation</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-14T22.50.36Screenshot%202023-12-14%20at%2017.49.07.png.webp?alt=media&token=270fa112-65e1-43e9-812e-22ae8b59308b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Dashboard<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain which ones are working for this milestone</td></tr>
<tr><td> <em>Response:</em> <p>In this milestone, I have implemented functionality for:<br>1) create a new checking account<br>for user (<a href="http://class.uvgrade.com/mql/Project/create_account.php">http://class.uvgrade.com/mql/Project/create_account.php</a>)<br>2) List accounts of user (<a href="http://class.uvgrade.com/mql/Project/my_accounts.php">http://class.uvgrade.com/mql/Project/my_accounts.php</a>)<div>3) Deposit (<a href="http://class.uvgrade.com/mql/Project/deposit.php">http://class.uvgrade.com/mql/Project/deposit.php</a>)</div><div>4) Withdraw (<a href="http://class.uvgrade.com/mql/Project/withdraw.php">http://class.uvgrade.com/mql/Project/withdraw.php</a>)<br><br><span style="font-size:<br>13px;">links that are dummy:<br></span>Transfer and Profile page. They will allow user to transfer<br>money and see their profile respectively</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/minhle27/IT202-101/pull/8">https://github.com/minhle27/IT202-101/pull/8</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Create a checking Account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the Create Account Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-14T23.56.47Screenshot%202023-12-14%20at%2018.56.20.png.webp?alt=media&token=9dc60ba3-c67e-45f9-a1ec-99c3fe26f864"/></td></tr>
<tr><td> <em>Caption:</em> <p>Create Account Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing validation errors and success message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-14T23.37.16Screenshot%202023-12-14%20at%2018.36.58.png.webp?alt=media&token=525d4c10-98ae-4d74-96af-b9f36985cd7e"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing validation errors<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-14T23.55.26Screenshot%202023-12-14%20at%2018.55.10.png.webp?alt=media&token=f9a4bef0-dc25-4c23-b8a5-458efa7cea65"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show the success message from task 1&#39;s data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the transaction generated from the initial deposit (from the DB)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-15T00.01.01Screenshot%202023-12-14%20at%2019.00.10.png.webp?alt=media&token=49b206a8-9827-4a0b-935f-7b0ed094af58"/></td></tr>
<tr><td> <em>Caption:</em> <p>transaction generated from the initial deposit. Account id 2 deposit 6 dollars<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain which account number generation you used and the account creation process including the transaction logic</td></tr>
<tr><td> <em>Response:</em> <ol><br><li>Account number generation (I choose option 2): I created a helper function<br>for this process, the&nbsp;get_new_account_number() function in user_helpers.php. First, I inserted a Null record<br>the accounts table to retrieve that last inserted id by using&nbsp;$db-&gt;lastInsertId();. Then the<br>new account number is created by appending the retrieved id to a random<br>string a length 12 - length(id). The random string is created by taking<br>a subtring of desired length of&nbsp;str_shuffle($characters) where $characters is a variable holds possible<br>characters of account number. By doing this, it is ensured that every account<br>number is unique as long as the number of accounts does not exceed<br>the number of possible permutations.<br><br>2) Account creation logic: First a new account for<br>user is inserted into account table using appropriate value. Then the balance of<br>world account is fetched to pre-calculate the expected total of world account after<br>transaction ($world_expected_total = $world_acc_balance - $depositAmount) and $user_expected_total = $depositAmount. We then insert<br>two records with proper values to transaction table, namely:<br><br><pre><b>$stmt-&gt;execute([":account_src" =&gt; -1, ":account_dest" =&gt;<br>$account_id, ":balance_change" =&gt; -$depositAmount, ":transaction_type" =&gt; "deposit", ":memo" =&gt; "create account", ":expected_total" =&gt;<br>$world_expected_total]); </b></pre><pre><b><br>$stmt-&gt;execute([":account_src" =&gt; $account_id, ":account_dest" =&gt; -1, ":balance_change" =&gt; $depositAmount, ":transaction_type" =&gt; "deposit",<br>":memo" =&gt; "create account", ":expected_total" =&gt; $user_expected_total]);</b></li><br></ol><br><div>We then update account balance for both<br>world account by sum of balance_change of account_src:</div><pre><b>$stmt = $db-&gt;prepare("UPDATE Accounts SET balance<br>= (SELECT SUM(balance_change) FROM Transactions WHERE account_src = :account_id) WHERE id = :account_id");<br><br><p></b><div>Finally,<br>I fetch all the accounts of user again and cache it in session<br>variable for other uses.</div></pre></pre><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/minhle27/IT202-101/pull/8">https://github.com/minhle27/IT202-101/pull/8</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://class.uvgrade.com/mql/Project/create_account.php">http://class.uvgrade.com/mql/Project/create_account.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to list their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's account list view (show 5 accounts)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-15T00.31.11Screenshot%202023-12-14%20at%2019.30.50.png.webp?alt=media&token=6b6e9b99-38e7-4622-88e6-950ca43cbdee"/></td></tr>
<tr><td> <em>Caption:</em> <p>user&#39;s account list view<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the page is displayed and the data lookup occurs</td></tr>
<tr><td> <em>Response:</em> <p>I retrieve all accounts of user whenever they login or create a new<br>account or perform a transaction and cache it to session to reduce the<br>need for sending queries. So I just need to loop through and show<br>the first five accounts of user from session variable.<br>&nbsp;<br>Here is the way I<br>retrieve all accounts:<br>$stmt = $db-&gt;prepare(&quot;SELECT * FROM Accounts WHERE user_id = :user_id&quot;); <br>$stmt-&gt;execute([&quot;:user_id&quot;<br>=&gt; get_user_id()]); <br>$accounts = $stmt-&gt;fetchAll(PDO::FETCH_ASSOC);<br><div><br></div><div>I send a query to ask for all accounts<br>that are associated with a user_id;</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/minhle27/IT202-101/pull/8">https://github.com/minhle27/IT202-101/pull/8</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://class.uvgrade.com/mql/Project/my_accounts.php">http://class.uvgrade.com/mql/Project/my_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Account Transaction Details </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of an account's transaction history</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-15T00.53.39Screenshot%202023-12-14%20at%2019.53.25.png.webp?alt=media&token=5bb6682b-5e73-4037-b360-888cfb9c7fe8"/></td></tr>
<tr><td> <em>Caption:</em> <p>Account Transaction Details<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-15T00.54.28Screenshot%202023-12-14%20at%2019.54.21.png.webp?alt=media&token=9a959bde-9588-4e0b-b656-4c2599affd74"/></td></tr>
<tr><td> <em>Caption:</em> <p>Account Transaction Details<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-15T00.55.03Screenshot%202023-12-14%20at%2019.54.55.png.webp?alt=media&token=eca55428-3264-4026-8c9e-e5f31fb8bb36"/></td></tr>
<tr><td> <em>Caption:</em> <p>Account Transaction Details<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the lookup and display occurs</td></tr>
<tr><td> <em>Response:</em> <p>Basically, I just need to select all required fields from transactions table. However,<br>in order to display account_src and account_dest as account id instead of account<br>number, I need to join the accounts table twice to transactions table as<br>there are two relationships between two these different tables. Here, I join the<br>Accounts A_src table in order to retrieve account_src id and similarly for A_dest<br>table in order to retrieve id for accounts_dest. I only retrieved records which<br>have the account_src as user&#39;s account.<pre><b>$stmt = $db-&gt;prepare("SELECT t.id, t.account_src, t.account_dest, t.transaction_type, t.balance_change,<br>t.created, t.expected_total, t.memo, A_src.account_number AS account_src_number, A_dest.account_number AS account_dest_number FROM Transactions t JOIN<br>Accounts A_src ON t.account_src = A_src.id JOIN Accounts A_dest ON t.account_dest = A_dest.id<br>WHERE t.account_src = :account_id ORDER BY t.created DESC LIMIT 10"); <br><br>$stmt-&gt;execute([":account_id" =&gt; $accountId]);<br><br>$transactions = $stmt-&gt;fetchAll(PDO::FETCH_ASSOC</b>);</pre><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/minhle27/IT202-101/pull/8">https://github.com/minhle27/IT202-101/pull/8</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://class.uvgrade.com/mql/Project/transaction_history.php?account_id=2">http://class.uvgrade.com/mql/Project/transaction_history.php?account_id=2</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Deposit/Withdraw </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a Screenshot of the Deposit Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-15T01.31.50Screenshot%202023-12-14%20at%2020.31.22.png.webp?alt=media&token=78b84feb-796a-4617-beb9-124c376da59f"/></td></tr>
<tr><td> <em>Caption:</em> <p>Deposit Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a Screenshot of the Withdraw Page (this potentially can be the same page with different views)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-15T01.34.03Screenshot%202023-12-14%20at%2020.33.53.png.webp?alt=media&token=39dd4e13-104b-413b-ad5d-3798966f4cdc"/></td></tr>
<tr><td> <em>Caption:</em> <p>Withdraw Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show validation error for negative numbers</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-15T01.36.11Screenshot%202023-12-14%20at%2020.35.59.png.webp?alt=media&token=3b900a76-6ca9-416e-b2fe-87f155135189"/></td></tr>
<tr><td> <em>Caption:</em> <p>validation error for negative numbers<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Show validation error for withdrawing more than the account contains</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-15T01.36.54Screenshot%202023-12-14%20at%2020.34.53.png.webp?alt=media&token=1565d254-aa79-4d9a-b6be-09d20b4a2649"/></td></tr>
<tr><td> <em>Caption:</em> <p>validation error for withdrawing more than the account contains<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Show a success message for deposit and withdraw (2 screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-15T01.37.52Screenshot%202023-12-14%20at%2020.37.39.png.webp?alt=media&token=30ef5ad6-32ef-4ac2-993e-d30552e09af2"/></td></tr>
<tr><td> <em>Caption:</em> <p>a success message for deposit. User will be redirected back to list accounts<br>page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-15T01.39.44Screenshot%202023-12-14%20at%2020.39.32.png.webp?alt=media&token=d0a8dee4-ef71-428c-a391-afb7e3e59b82"/></td></tr>
<tr><td> <em>Caption:</em> <p>a success message for withdraw. User will be redirected back to list accounts<br>page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Show a screenshot of the transaction pairs in the DB for the above tests</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-15T01.41.55Screenshot%202023-12-14%20at%2020.41.48.png.webp?alt=media&token=a2066d1b-b780-4c5f-bb47-5f1f3f34b77c"/></td></tr>
<tr><td> <em>Caption:</em> <p>transaction pair for deposit action<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fmql%2F2023-12-15T01.43.10Screenshot%202023-12-14%20at%2020.42.54.png.webp?alt=media&token=6a6eb8cd-b1b1-4e35-8da2-06e5610f0c78"/></td></tr>
<tr><td> <em>Caption:</em> <p>transaction pair for withdraw action<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain how transactions work</td></tr>
<tr><td> <em>Response:</em> <p><span style="font-size: 13px;">1) account lookup: the id of chosen account and deposit amount<br>are attached with the form. The server will extract this id and deposit<br>amount and send a query (SELECT balance FROM Accounts WHERE id = :account_id)<br>to the database for current balance of this account. We also need the<br>balance account of world account.&nbsp;<br>2) Calculate expected total:&nbsp;<br>$world_expected_total = $world_acc_balance - $depositAmount; <br>$user_expected_total<br>= $user_acc_balance + $depositAmount;<br></span><span style="font-size: 13px;">The remaining steps are basically the same as<br>when creating a new account. Here, I use deposit transaction for the sake<br>of desmonstration:<br></span>We then insert two records with proper values to transaction table, namely:<br><br>&lt;pre<br>style=&quot;font-size: 14px;&quot;&gt;<b>$stmt-&gt;execute([&quot;:account_src&quot; =&gt; -1, &quot;:account_dest&quot; =&gt; $account_id, &quot;:balance_change&quot; =&gt; -$depositAmount, &quot;:transaction_type&quot; =&gt; &quot;deposit&quot;,<br>&quot;:memo&quot; =&gt; &quot;create account&quot;, &quot;:expected_total&quot; =&gt; $world_expected_total]); </b></pre><pre style="font-size: 14px;"><b><br>$stmt-&gt;execute([":account_src" =&gt; $account_id, ":account_dest"<br>=&gt; -1, ":balance_change" =&gt; $depositAmount, ":transaction_type" =&gt; "deposit", ":memo" =&gt; "create account", ":expected_total"<br>=&gt; $user_expected_total]);</b></p><br><div>We then update account balance for both world account by sum of<br>balance_change of account_src:</div><pre><b>$stmt = $db-&gt;prepare("UPDATE Accounts SET balance = (SELECT SUM(balance_change) FROM Transactions<br>WHERE account_src = :account_id) WHERE id = :account_id");<br>&nbsp;</b></pre></pre><span style="font-family: monospace, monospace; font-size: 1em;<br>white-space-collapse: preserve;">Finally, I fetch all the accounts of user again and cache it<br>in session variable for other uses.</span><span style="font-size: 13px;">&nbsp;Now the account balance and every<br>other things are up to date.</span><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/minhle27/IT202-101/pull/8">https://github.com/minhle27/IT202-101/pull/8</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://class.uvgrade.com/mql/Project/deposit.php">http://class.uvgrade.com/mql/Project/deposit.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://class.uvgrade.com/mql/Project/withdraw.php">http://class.uvgrade.com/mql/Project/withdraw.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) </td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://class.uvgrade.com/mql/Project/login.php">http://class.uvgrade.com/mql/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-101-F23/it202-milestone-2-bank-project/grade/mql" target="_blank">Grading</a></td></tr></table>