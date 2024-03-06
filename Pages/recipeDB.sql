
CREATE TABLE user (
  id INT NOT NULL AUTO_INCREMENT,
  name varchar(128) NOT NULL,
  email varchar(255) UNIQUE NOT NULL,
  password_hash varchar(255) NOT NULL,
  preferences TEXT,
  member INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
);

CREATE TABLE recipes (
  id INT NOT NULL AUTO_INCREMENT,
  title TEXT NOT NULL,
  ingredients TEXT NOT NULL,
  instruction TEXT NOT NULL,
  time INT NOT NULL,
  health_labels TEXT,
  meal_type TEXT,
  cuisine_type TEXT,
  user_id INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES user(id)
);

CREATE TABLE favorites (
  id INT NOT NULL AUTO_INCREMENT,
  title TEXT NOT NULL,
  ingredients TEXT NOT NULL,
  instruction TEXT NOT NULL,
  time INT NOT NULL,
  health_labels TEXT,
  meal_type TEXT,
  cuisine_type TEXT,
  user_id INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES user(id)
);

CREATE TABLE Friends (
  id INT AUTO_INCREMENT PRIMARY KEY,
  User1 INT NOT NULL,
  User2 INT NOT NULL,
  Status INT NOT NULL,
  FOREIGN KEY (User1) REFERENCES user(id),
  FOREIGN KEY (User2) REFERENCES user(id)
);

