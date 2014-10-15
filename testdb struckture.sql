CREATE TABLE academic (
    acad_id               INT           NOT NULL AUTO_INCREMENT,
    id                    INT           NOT NULL,
    cursem                INT           NULL,
    sem1                  DECIMAL       NULL, 
    sem2                  DECIMAL       NULL, 
    sem3                  DECIMAL       NULL, 
    sem4                  DECIMAL       NULL, 
    sem5                  DECIMAL       NULL, 
    sem6                  DECIMAL       NULL, 
    sem7                  DECIMAL       NULL, 
    sem8                  DECIMAL       NULL, 
    cgpa                  DECIMAL       NULL, 
    supply                VARCHAR(5)    NULL, 
    back                  VARCHAR(5)    NULL, 
    reason                TEXT          NULL
);


//new column added seo-friendly url
// this functionality is yet to be implemented internally
// see modes/users->get_url()
CREATE TABLE users (
    id               INT           NOT NULL AUTO_INCREMENT,
    url              VARCHAR (50)  NOT NULL,
    username         VARCHAR (50)  NOT NULL,
    password         VARCHAR (100) NOT NULL,
    enroll           INT           NULL,
    branch           VARCHAR (3)   NULL,
    year_of_admin    INT           NULL,
    FNAME            VARCHAR (50)  NOT NULL,
    MNAME            VARCHAR (50)  NULL,
    LNAME            VARCHAR (50)  NULL,
    gender           VARCHAR (1)   NULL,
    dob              DATE          NULL,
    12_std_id        INT           NULL,
    10_std_id        INT           NULL,
    AIEEE_id         INT           NULL,
    score_sheet_id   INT           NULL,
    Parents_name     VARCHAR (50)  NULL,
    AddressL1        TEXT          NULL,
    AddressL2        TEXT          NULL,
    City             VARCHAR (50)  NULL,
    Email_add        VARCHAR (50)  NULL,
    Phone            VARCHAR (50)  NULL,
    ECA              TEXT          NULL,
    Career_obj       TEXT          NULL,
    Technical_Skills TEXT          NULL,
    Other_skills     TEXT          NULL,
    Project_id       INT           NULL,
    PRIMARY KEY CLUSTERED (id ASC)
);


CREATE TABLE pwd_reset
(
    username         VARCHAR (50)  NOT NULL,
    email            VARCHAR (50)  NOT NULL,
    v_id             VARCHAR (50)  NOT NULL
);


CREATE TABLE school_details
(
    school_id               INT                NOT NULL AUTO_INCREMENT, 
    id                      INT                NOT NULL  , 
    type                    INT                NOT NULL, 
    school_name             VARCHAR(80)        NULL, 
    board                   VARCHAR(50)        NULL, 
    year                    NCHAR(4)           NULL, 
    percentage              NCHAR(9)           NULL, 
    PRIMARY KEY (school_id), 
    CONSTRAINT FK_Table_ToTable FOREIGN KEY (id) REFERENCES users(id)
);

//for type 1 we have 12th details
//for type 2  we have 10th details
//for type 3 we have aieee details with name being quota,board being category,year = year,and percentage = percentage

CREATE TABLE applications
(
    application_id          INT             NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    id                      INT             NOT NULL,
    job_id                  INT             NOT NULL. 
    Company_name            VARCHAR(50)     NULL, 
    Status                  VARCHAR(50)     NULL, 
    date                    VARCHAR(50)     NULL,
    cover_letter            TEXT            NULL, 
    CONSTRAINT FK_Applications_ToTable FOREIGN KEY (id) REFERENCES users(id)
);

//TODO add more feilds
CREATE TABLE recruiters
(
    r_id            INT             NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    username        VARCHAR(50)     NOT NULL,
    password        VARCHAR(100)    NOT NULL,
    Company_name    VARCHAR(50)     NOT NULL,
    url             VARCHAR(30)     NULL,
    website_link    VARCHAR(100)    NULL,
    Company_Type    VARCHAR(50)     NULL,
    Industry_Sector VARCHAR(50)     NULL,
    Brief           TEXT            NULL
);


CREATE TABLE branchesRecruiters(
        br_id           NOT NULL PRIMARY KEY AUTO_INCREMENT,   
        branch          VARCHAR(50)     NOT NULL ,
        r_id            INT             NOT NULL
);





//every company will have to create a job or job-position they can have multiple jobs too 
//jobs available

CREATE TABLE job_profiles
(
    job_id                      INT         NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    r_id                        INT         NOT NULL,    
    job_desig                   VARCHAR(50)     NULL,
    job_descr                   TEXT            NULL,
    application_dead_line       DATETIME    NOT NULL,
    place                       VARCHAR(50)     NULL,
    ctc                         VARCHAR(50)     NULL,
    gross                       VARCHAR(50)     NULL,
    bonus                       VARCHAR(50)     NULL,
    bond                        VARCHAR(50)     NULL,
    bond_desc                   TEXT            NULL,
    shortlist_from_Resumes      VARCHAR(50)     NULL,
    written_Test                VARCHAR(50)     NULL,
    group_Discussion            VARCHAR(50)     NULL, 
    personal_Interview          VARCHAR(50)     NULL,
    medical_Test                VARCHAR(50)     NULL,
    number_of_rounds            VARCHAR(50)     NULL,
    min_offers                  VARCHAR(50)     NULL,
    eligible_departments        VARCHAR(50)     NULL,
    number_of_members           VARCHAR(50)     NULL,
    number_of_rooms             VARCHAR(50)     NULL,
    other_requirements          VARCHAR(50)     NULL,
    contact_name                VARCHAR(50)     NULL,
    contact_designation         VARCHAR(50)     NULL,
    contact_email               VARCHAR(50)     NULL, 
    contact_number              VARCHAR(50)     NULL,
    approved                    INT             NULL DEFAULT '0' 
);





//NOTE FOR List of Programs Either mention general category such as: All Students / All B. Tech & Dual Degree Students / All Dual Degree/ All M. Tech Students / All students majoring in 










//for announcements
CREATE TABLE FEED
(
    feed_id         INT     NOT NULL PRIMARY KEY AUTO_INCREMENT,
    date            DATE    NOT NULL,
    data            TEXT    NULL,
    heading         TEXT    NOT NULL,
    type            TEXT    NULL
);



INSERT INTO users (enroll,branch, year_of_admin, FNAME, MNAME, LNAME, gender, 12_std_id, 10_std_id, AIEEE_id, score_sheet_id, Parents_name, AddressL1, AddressL2, City, Email_add, Phone, ECA, Career_obj, Technical_Skills, Other_skills, Project_id) VALUES (552, N'IT', NULL, N'Alaf', N'Azam', N'Khan','M', NULL, NULL, NULL, NULL, NULL, N'Iqbal Ahmad', N'34 ashoka colony', N'MAnikh bagh road', N'indore', N'alafazam@gmail.com', N'0898989898', N'sdkjvbsdjkvnskjskvnskvns dkncvsdkjvns kdvns vnsdjkn', N'akvnsdkjvnskdj  adskn vskdjvnskj v skjds knvvdskjv dkv sjdv', N'akj fnkajfnaksj sdfns kdjfnskdjnf skdjn  askjfnskjfnsdkj  akjfnakjfnakjfn  akjfdnaksjfn ', N' kajssfnkajfnakjfn  akjfnakfnasjkfn  askjkjfnakj akfn', NULL);

INSERT INTO school (id, school_name, city, year, board, paercentage, type) VALUES (1, N'asdas', N'asfasdf', N'4566', N'sdfsdfsd', N'fsddfsdf  ', 1)

INSERT INTO users (username, password) values ('alafazam', MD5('alafazam'));

INSERT INTO feed (date,data,heading) values('2014-12-15','I am a disco dancer','Yeah baby');

INSERT INTO recruiters(usersname ,password ,Company_name ,url ,website_link ,Company_Type ,Industry_Sector ,Brief) values ('gravity_games',MD5('alafazam'),'Gravity-games');