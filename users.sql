SELECT COUNT(*), companies.`name`, users.`name`, gender, join_date FROM users
INNER JOIN companies
ON users.company = companies.id
WHERE gender = 'male' AND DATEDIFF(NOW(),join_date) > 365