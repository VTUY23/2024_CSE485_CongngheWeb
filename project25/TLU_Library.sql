CREATE DATABASE TLU_Library;
CREATE TABLE Books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255),
    description TEXT,
    genre VARCHAR(50)
);
CREATE TABLE Authors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    biography TEXT
);
CREATE TABLE Books_Authors (
    book_id INT NOT NULL,
    author_id INT NOT NULL,
    PRIMARY KEY (book_id, author_id),
    FOREIGN KEY (book_id) REFERENCES Books(id),
    FOREIGN KEY (author_id) REFERENCES Authors(id)
);
INSERT INTO Books (title, author, description, genre) VALUES
("The Lord of the Rings", "J.R.R. Tolkien", "An epic fantasy adventure...", "Fantasy"),
("Pride and Prejudice", "Jane Austen", "A classic novel of love and society...", "Romance"),
("The Hitchhiker's Guide to the Galaxy", "Douglas Adams", "A humorous science fiction comedy...", "Science Fiction");
INSERT INTO Authors (name, biography) VALUES
("J.R.R. Tolkien", "English writer and philologist..."),
("Jane Austen", "English novelist known for social commentary..."),
("Douglas Adams", "English writer, humorist, and dramatist...");
INSERT INTO Books_Authors (book_id, author_id) VALUES
(1, 1),
(2, 2),
(3, 3);