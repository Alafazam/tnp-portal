CREATE TABLE StudentDetails (
    student_id       INT           NOT NULL AUTO_INCREMENT,
    username         VARCHAR (50)  NOT NULL,
    password         VARCHAR (100) NOT NULL,
    enroll           INT           NULL,
    branch           NVARCHAR (50) NULL,
    12_std_id        INT           NULL,
    10_std_id        INT           NULL,
    AIEEE_id         INT           NULL,
    score_sheet_id   INT           NULL,
    year_of_admin    INT           NULL,
    FNAME            VARCHAR (50)  NULL,
    MNAME            VARCHAR (50)  NULL,
    LNAME            VARCHAR (50)  NULL,
    Parents_name     VARCHAR (50)  NULL,
    AddressL1        VARCHAR (50)  NULL,
    AddressL2        VARCHAR (50)  NULL,
    City             VARCHAR (50)  NULL,
    Email_add        VARCHAR (50)  NULL,
    Phone            VARCHAR (50)  NULL,
    ECA              VARCHAR (150) NULL,
    Career_obj       VARCHAR (150) NULL,
    Technical_Skills VARCHAR (150) NULL,
    Other_skills     VARCHAR (150) NULL,
    Project_id       INT           NULL,
    PRIMARY KEY CLUSTERED (student_id ASC)
);



CREATE TABLE school_details
(
    school_id INT NOT NULL AUTO_INCREMENT, 
    student_id INT NOT NULL  , 
    school_name VARCHAR(50) NULL, 
    city VARCHAR(50) NULL, 
    year NCHAR(10) NULL, 
    board VARCHAR(50) NULL, 
    percentage NCHAR(10) NULL, 
    type INT NOT NULL, 
    PRIMARY KEY (school_id), 
    CONSTRAINT FK_Table_ToTable FOREIGN KEY (student_id) REFERENCES StudentDetails(student_id)
);


CREATE TABLE applications
(
    application_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    student_id INT NOT NULL, 
    Company VARCHAR(50) NULL, 
    Status VARCHAR(50) NULL, 
    date VARCHAR(50) NULL, 
    CONSTRAINT FK_Applications_ToTable FOREIGN KEY (student_id) REFERENCES StudentDetails(student_id)
);


INSERT INTO StudentDetails (enroll, branch, 12_std_id, 10_std_id, AIEEE_id, score_sheet_id, year_of_admin, FNAME, MNAME, LNAME, Parents_name, AddressL1, AddressL2, City, Email_add, Phone, ECA, Career_obj, Technical_Skills, Other_skills, Project_id) VALUES (552, N'IT', NULL, NULL, NULL, NULL, NULL, N'Alaf', N'Azam', N'Khan', N'Iqbal Ahmad', N'34 ashoka colony', N'MAnikh bagh road', N'indore', N'alafazam@gmail.com', N'0898989898', N'sdkjvbsdjkvnskjskvnskvns dkncvsdkjvns kdvns vnsdjkn', N'akvnsdkjvnskdj  adskn vskdjvnskj v skjds knvvdskjv dkv sjdv', N'akj fnkajfnaksj sdfns kdjfnskdjnf skdjn  askjfnskjfnsdkj  akjfnakjfnakjfn  akjfdnaksjfn ', N' kajssfnkajfnakjfn  akjfnakfnasjkfn  askjkjfnakj akfn', NULL);

INSERT INTO school (student_id, school_name, city, year, board, paercentage, type) VALUES (1, N'asdas', N'asfasdf', N'4566', N'sdfsdfsd', N'fsddfsdf  ', 1)

INSERT INTO StudentDetails (username, password) values ('alafazam', MD5('alafazam'));
