# PeerNews 🗞️

A public news app made with PHP. Allows all users to publish their articles along with a cover images.

Made while learning PHP & MySQL.

## Screenshots

![HomePage](screenshots/homepage.png 'Home Page')

![Article Page](screenshots/articlepage.png 'Article Page')

![Registration Page](screenshots/registerpage.png 'Registration Page')

![User Dashboard](screenshots/userdashboard.png 'User Dashboard')

## Run the project locally

1. Install a PHP compatible stack (LAMP/WAMP/MAMP). [XAMPP](https://apachefriends.org/) is a good recommendation.

2. Clone the repository to root folder of web server. (`htdocs` folder in case of XAMPP)

3. Create a database named `peernews` using PHPMyAdmin.

4. Create a `.env` file with the following content & place it in `peernews` folder.

```env
DB_HOST='YOUR_HOST'
DB_USER='YOUR_MYSQL_USERNAME'
DB_PASS='YOUR_MYSQL_PASSWORD'
DB_NAME='peernews'
```

5. Access the application at `https://localhost/peernews`

<br/>

---

<a href="https://yashjawale.github.io/" target="_blank"><img style="width: 36px; margin: 12px;" src="https://raw.githubusercontent.com/yashjawale/yashjawale.github.io/main/public/logo.svg" alt="Yash Jawale"/></a>
