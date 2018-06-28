# OnlineQuiz

1. index.php - Login Page
2. the quizeset(1-4).php are the quiz pages where the questions are displayed with their options.
3. response.php - Captures the response by the user and stores them in the database
4. logout.php - logs off the user and redirects it to a logout page.

The database tables are : 
1. participants_details(receipt_no, name, logintime, year, college, set_no) - in this table the receipt no and the name fields are filled by the admin.
2. response(r_no, set_no, q1, q2, q3, .... , q14, q15)
