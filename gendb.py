import sqlite3
import hashlib

# Connect to or create a SQLite database file
conn = sqlite3.connect('user_credentials.db')

# Create a cursor object to execute SQL queries
cursor = conn.cursor()

# Create a table to store usernames and hashed passwords
cursor.execute('''
    CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT NOT NULL,
        password TEXT NOT NULL
    )
''')

# Function to hash passwords
def hash_password(password):
    return hashlib.sha256(password.encode()).hexdigest()

# Sample usernames and passwords (replace these with actual credentials)
user_credentials = [
    ('user1', 'password1'),
    ('user2', 'password2'),
    ('user3', 'password3')
]

# Insert sample credentials into the database (hashed passwords)
for username, password in user_credentials:
    hashed_password = hash_password(password)
    cursor.execute('INSERT INTO users (username, password) VALUES (?, ?)', (username, hashed_password))

# Commit changes and close connection
conn.commit()
conn.close()

print("User credentials database created successfully.")
