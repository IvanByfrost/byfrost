-- Tabla de usuarios
CREATE TABLE user_main (
	user_main_id INT PRIMARY KEY AUTO_INCREMENT,
	credential_number VARCHAR(40) NOT NULL UNIQUE,
	name_user VARCHAR(50) NOT NULL,
	lastname_user VARCHAR(60) NOT NULL,
	credential_type VARCHAR(2) NOT NULL,
	address_user VARCHAR(60) NOT NULL,
	dob DATE NOT NULL,
	password_hash VARBINARY(255) NOT NULL,
	salt_password VARBINARY(255) NOT NULL,
	user_status BIT NOT NULL DEFAULT 1
);

-- Index de documento de identidad
CREATE INDEX user_index_credential ON user_main (credential_number);

-- Tabla de teléfonos. 
CREATE TABLE phone_user (
	phone_user_id INT PRIMARY KEY AUTO_INCREMENT,
	user_main_id INT NOT NULL,
	personal_phone VARCHAR(60) NOT NULL,
	work_phone VARCHAR(60) NOT NULL,
    FOREIGN KEY (user_main_id) REFERENCES user_main(user_main_id)
);

-- Tabla de correos.
CREATE TABLE email_user (
	email_user_id INT PRIMARY KEY AUTO_INCREMENT,
	user_main_id INT NOT NULL,
	personal_email VARCHAR(70),
	work_email VARCHAR(70),
    FOREIGN KEY (user_main_id) REFERENCES user_main(user_main_id)
);

-- tabla de roles en el sistema. 
CREATE TABLE role_duty (
	role_duty_id INT PRIMARY KEY AUTO_INCREMENT,
	role_name VARCHAR(12) NOT NULL,
);

-- Tabla puente de rol y usuarios.
CREATE TABLE role_duty_user(
	role_duty_user_id INT PRIMARY KEY AUTO_INCREMENT,
	role_duty_id INT NOT NULL,
    user_main_id INT NOT NULL,
    FOREIGN KEY (user_main_id) REFERENCES user_main(user_main_id)
);

-- Tabla de turnos. 
CREATE TABLE shift_user (
	shift_user_id INT PRIMARY KEY AUTO_INCREMENT,
	start_time TIME NOT NULL,
	end_time TIME NOT NULL,
);

-- Tabla de accesos.
CREATE TABLE access_role (
	access_role_id INT PRIMARY KEY AUTO_INCREMENT,
	role_id INT not null,
	access_description VARCHAR(100) NOT NULL,
    FOREIGN KEY (role_id) REFERENCES role_duty_user(role_duty_user_id)
);

--Tabla de padres. 
CREATE TABLE parent (
	parent_id INT PRIMARY KEY AUTO_INCREMENT,
	user_main_id INT NOT NULL,
    FOREIGN KEY (user_main_id) REFERENCES user_main(user_main_id)
);

--Tabla de estudiantes.
CREATE TABLE student (
	student_id INT PRIMARY KEY AUTO_INCREMENT,
	user_main_id INT NOT NULL,
    FOREIGN KEY (user_main_id) REFERENCES user_main(user_main_id)
	student_status BIT NOT NULL DEFAULT 1
);

--Tabla de cuentas de estudiantes.
CREATE TABLE student_account (
	student_account_id INT PRIMARY KEY AUTO_INCREMENT,
	student_id INT NOT NULL, 
	tuition_date DATE NOT NULL,
	tuition_fee DECIMAL(10,2) NOT NULL,
	mon_tuition_fee DECIMAL(10,2) NOT NULL,
	tuition_fee_date DATETIME NOT NULL,
	tuition_status VARCHAR(10) NOT NULL,
    FOREIGN KEY (student_id) REFERENCES student(student_id)
);

--Tabla puente entre padres y estudiantes.
-- Esta tabla permite que un padre pueda tener varios estudiantes.
CREATE TABLE parent_student (
	parent_student_id INT PRIMARY KEY AUTO_INCREMENT,
    parent_id INT NOT NULL,
	student_id INT NOT NULL,
	FOREIGN KEY(parent_id) REFERENCES parent(parent_id),
	FOREIGN KEY (student_id) REFERENCES student(student_id)
);

--Index de la tabla puente entre padres y estudiantes.
CREATE INDEX parent_index_0
ON parent_student (parent_id);
CREATE INDEX student_index_1
ON parent_student (student_id);

--Tabla de días de la semana.
CREATE TABLE week_day (
	week_id INT PRIMARY KEY AUTO_INCREMENT,
	name_day VARCHAR(20) NOT NULL,
);

--Tabla de los horarios de clases.
CREATE TABLE schedule_school (
	schedule_id INT PRIMARY KEY AUTO_INCREMENT,
	week_id INT NOT NULL,
    FOREIGN KEY (week_id) REFERENCES week_day(week_id),
	start_time TIME NOT NULL,
	end_time TIME NOT NULL
);

--Tabla de los docentes. 
CREATE TABLE professor (
	professor_id INT PRIMARY KEY AUTO_INCREMENT,
	user_main_id INT NOT NULL,
    FOREIGN KEY (user_main_id) REFERENCES user_main(user_main_id)
);

--Tabla de los grados. 
CREATE TABLE grade (
	grade_id INT PRIMARY KEY AUTO_INCREMENT,
	name_grade VARCHAR(10) NOT NULL,
	level_grade VARCHAR(30) NOT NULL
);

--Tabla de los grupos de clases.
CREATE TABLE class_group (
	class_group_id INT PRIMARY KEY AUTO_INCREMENT,
    class_group_name varchar(6) NOT NULL,
    group_quota TINYINT NOT NULL,
	professor_id INT NOT NULL, 
    FOREIGN KEY (professor_id) REFERENCES professor(professor_id),
    grade_id INT NOT NULL,
    FOREIGN KEY (grade_id) REFERENCES grade(grade_id)
);

--Tabla puente entre estudiantes y grupos de clases.
CREATE TABLE student_group (
	student_group_id INT PRIMARY KEY AUTO_INCREMENT,
	class_group_id INT NOT NULL,
    FOREIGN KEY (class_group_id) REFERENCES class_group(class_group_id),
	student_id INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES student(student_id),
    school_year YEAR NOT NULL,
);

--Tabla puente entre grupos de clases y horarios.
-- Esta tabla permite que un grupo de clases tenga varios horarios.
CREATE TABLE group_schedule (
	group_schedule_id INT PRIMARY KEY AUTO_INCREMENT,
	class_group_id INT NOT NULL,
    FOREIGN KEY (class_group_id) REFERENCES class_group(class_group_id),
	schedule_id INT NOT NULL,
    FOREIGN KEY (schedule_id) REFERENCES schedule_school(schedule_id)
);
--Tabla de los períodos académicos.
CREATE TABLE academic_term (
	academic_term_id INT PRIMARY KEY AUTO_INCREMENT,
	academic_term_name VARCHAR(20) NOT NULL,
	start_date_term DATE NOT NULL,
	end_date_term DATE NOT NULL
);

--Tabla puente entre horarios y períodos académicos.
-- Esta tabla permite que un horario tenga varios períodos académicos.
CREATE TABLE schedule_academic_term (
	schedule_academic_term_id INT PRIMARY KEY AUTO_INCREMENT,
	schedule_id INT not null,
    FOREIGN KEY (schedule_id) REFERENCES schedule_school(schedule_id),
	academic_term_id INT not null,
    FOREIGN KEY (academic_term_id) REFERENCES academic_term(academic_term_id)
);

--Tabla de las asignaturas.
CREATE TABLE subject_school (
	subject_id INT PRIMARY KEY AUTO_INCREMENT,
	name_subject VARCHAR(50)
);

--Tabla puente entre asignaturas y horarios.
-- Esta tabla permite que una asignatura tenga varios horarios.
CREATE TABLE subject_schedule (
	subject_schedule_id INT PRIMARY KEY AUTO_INCREMENT,
	schedule_id INT NOT NULL,
    FOREIGN KEY (schedule_id) REFERENCES schedule_school(schedule_id),
	subject_id INT NOT NULL,
    FOREIGN KEY (subject_id) REFERENCES subject_school(subject_id)
);

--Tabla de los temas de las asignaturas.
-- Esta tabla permite que una asignatura tenga varios temas.
CREATE TABLE topic (
	topic_id INT PRIMARY KEY AUTO_INCREMENT,
	topic_name VARCHAR(30) NOT NULL,
	subject_id INT not null, 
    FOREIGN KEY (subject_id) REFERENCES subject_school(subject_id)
);

--Tabla de roles con turnos. 
CREATE TABLE shift_role (
        shift_role INT PRIMARY KEY AUTO_INCREMENT,
        shift_user_id INT not null, 
        FOREIGN KEY (shift_user_id) REFERENCES shift_user(shift_user_id),
        role_duty_user_id INT not null,
        FOREIGN KEY (role_duty_user_id) REFERENCES role_duty(role_duty_user_id)
);

--Tabla de rectores. 
CREATE TABLE headmaster (
	headmaster_id INT PRIMARY KEY AUTO_INCREMENT,
	user_main_id INT not null,
    FOREIGN KEY (user_main_id) REFERENCES user_main(user_main_id),
	office_hm VARCHAR(10) NOT NULL
);

--Tabla de coordinadores.
CREATE TABLE coordinator (
	coordinator_id INT PRIMARY KEY AUTO_INCREMENT,
	user_main_id INT not null,
    FOREIGN KEY (user_main_id) REFERENCES user_main(user_main_id)
);

--Tabla de contadores. 
CREATE TABLE treasurer (
	treasurer_id INT PRIMARY KEY AUTO_INCREMENT,
	user_main_id INT not null,
    FOREIGN KEY (user_main_id) REFERENCES user_main(user_main_id)
);

--Tabla de los colegios.
CREATE TABLE school (
	school_id INT PRIMARY KEY AUTO_INCREMENT,
	school_name VARCHAR(60) NOT NULL,
	school_quota SMALLINT NOT NULL,
	headmaster_id INT not null,
    FOREIGN KEY (headmaster_id) REFERENCES headmaster(headmaster_id)
);

--Tabla de los campus de los colegios.
-- Esta tabla permite que un colegio tenga varios campus.
CREATE TABLE school_campus (
	school_campus_id INT PRIMARY KEY AUTO_INCREMENT,
	school_id INT not null,
    FOREIGN KEY (school_id) REFERENCES school(school_id),
	school_campus_name varchar(60) NOT NULL,
	coordinator_id INT not null,
    FOREIGN KEY (coordinator_id) REFERENCES coordinator(coordinator_id),
	status_campus BIT NOT NULL
);

--Tabla puente entre los colegios y los grados.
-- Esta tabla permite que un colegio tenga varios grados.
CREATE TABLE school_grade (
	school_grade_id INT PRIMARY KEY AUTO_INCREMENT,
	school_campus_id INT not null,
    FOREIGN KEY (school_campus_id) REFERENCES school_campus(school_campus_id),
	grade_id INT not null,
    FOREIGN KEY (grade_id) REFERENCES grade(grade_id)
);

--Tabla de salones.
CREATE TABLE classroom (
	classroom_id INT PRIMARY KEY AUTO_INCREMENT,
	classroom_name VARCHAR(10) NOT NULL
);

--Tabla puente entre los colegios y los salones.
-- Esta tabla permite que un colegio tenga varios salones.
CREATE TABLE school_classroom (
	school_classroom_id INT PRIMARY KEY AUTO_INCREMENT,
	school_campus_id INT not null,
    FOREIGN KEY (school_campus_id) REFERENCES school_campus(school_campus_id),
	classroom_id INT not null,
    FOREIGN KEY (classroom_id) REFERENCES classroom(classroom_id)
);

--Tabla de eventos escolares.
CREATE TABLE event_school (
	event_id INT PRIMARY KEY AUTO_INCREMENT,
	type_event VARCHAR(60) NOT NULL,
	start_date_event DATETIME NOT NULL,
	end_date DATETIME NOT NULL
);

--Tabla puente entre los colegios y los eventos.
-- Esta tabla permite que un colegio tenga varios eventos.
CREATE TABLE school_campus_event (
	school_campus_event_id INT PRIMARY KEY AUTO_INCREMENT,
	school_campus_id INT not null,
    FOREIGN KEY (school_campus_id) REFERENCES school_campus(school_campus_id),
	event_id INT not null,
    FOREIGN KEY (event_id) REFERENCES event_school(event_id)
);

--Tabla de bancos.
CREATE TABLE bank (
	bank_id INT PRIMARY KEY AUTO_INCREMENT,
	name_bank varchar(20)
);

--Tabla de cuentas bancarias.
CREATE TABLE account (
	account_id INT PRIMARY KEY AUTO_INCREMENT,
	account_number VARCHAR(34) NOT NULL,
	bank_id INT not null,
    FOREIGN KEY REFERENCES bank(bank_id),
    treasurer_id INT NOT NULL,
    FOREIGN KEY (treasurer_id) REFERENCES treasurer(treasurer_id) 
);

--Tabla puente entre los colegios y las cuentas bancarias.
-- Esta tabla permite que un colegio tenga varias cuentas bancarias.
CREATE TABLE school_account (
	school_account_id INT PRIMARY KEY AUTO_INCREMENT,
	account_id INT not null,
    FOREIGN KEY (account_id) REFERENCES account(account_id),
	school_id INT not null,
    FOREIGN KEY (school_id) REFERENCES school(school_id)
);

--Tabla de transacciones bancarias.
CREATE TABLE transaction_user (
	transaction_id INT PRIMARY KEY AUTO_INCREMENT,
	transaction_number VARCHAR(50) NOT NULL,
	bank_id INT not null,
    FOREIGN KEY (bank_id) REFERENCES bank(bank_id),
	transaction_amount DECIMAL NOT NULL,
	concept_transaction VARCHAR(40)
);

--Tabla puente entre las cuentas bancarias y las transacciones.
-- Esta tabla permite que una cuenta bancaria tenga varias transacciones.
CREATE TABLE account_transaction (
	account_transaction INT PRIMARY KEY AUTO_INCREMENT,
	account_id INT NOT NULL,
    FOREIGN KEY (account_id)REFERENCES account(account_id),
	transaction_id INT NOT NULL,
    FOREIGN KEY (transaction_id) REFERENCES transaction_user(transaction_id),
	student_account_id INT NOT NULL,
    FOREIGN KEY (student_account_id) REFERENCES student_account(student_account_id)
);

--Tabla de calificaciones.
-- Esta tabla permite que un estudiante tenga varias calificaciones.
CREATE TABLE score (
	score_id INT PRIMARY KEY AUTO_INCREMENT,
	student_id INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES student(student_id),
	academic_term_id INT not null,
    FOREIGN KEY (academic_term_id) REFERENCES academic_term(academic_term_id),
	activity_id INT not null,
    FOREIGN KEY (activity_id) REFERENCES activity(activity_id),
);

--Tabla de asistencias.
CREATE TABLE attendance (
	attendance_id INT PRIMARY KEY AUTO_INCREMENT,
	check_in_at DATETIME  NOT NULL,
	student_id INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES student(student_id),
	academic_term_id INT NOT NULL,
    FOREIGN KEY (academic_term_id) REFERENCES academic_term(academic_term_id),
	week_id INT NOT NULL,
    FOREIGN KEY(week_id) REFERENCES week_day(week_id),
	subject_id INT not null,
    FOREIGN KEY (subject_id) REFERENCES subject_school(subject_id),
	professor_id INT NOT NULL,
    FOREIGN KEY (professor_id) REFERENCES professor(professor_id)
);

--Tabla de observadores.
CREATE TABLE conduct_report (
	conduct_report_id INT PRIMARY KEY AUTO_INCREMENT,
	student_id INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES student(student_id),
	professor_id INT NOT NULL,
    FOREIGN KEY (professor_id) REFERENCES professor(professor_id),
	conduct_report TEXT,
	register_date datetime NOT NULL
);

--Tabla de reportes de conducta.
-- Esta tabla permite que un estudiante tenga varios reportes de conducta.
CREATE TABLE summon (
	summon_id INT PRIMARY KEY AUTO_INCREMENT,
	professor_id INT NOT NULL,
    FOREIGN KEY (professor_id) REFERENCES professor(professor_id),
	conduct_report_id INT NOT NULL, 
    FOREIGN KEY (conduct_report_id) REFERENCES conduct_report(conduct_report_id),
	parent_id INT NOT NULL,
    FOREIGN KEY (parent_id) REFERENCES parent(parent_id),
	cause_summon TEXT,
	register_date datetime NOT NULL,
	summon_date datetime NOT NULL
);

--Tabla puente entre los observadores y los reportes de conducta.
CREATE TABLE conduct_report_summon (
	conduct_report_summon_id INT PRIMARY KEY AUTO_INCREMENT,
	conduct_report_id INT NOT NULL, 
    FOREIGN KEY (conduct_report_id) REFERENCES conduct_report(conduct_report_id),
	summon_id INT NOT NULL,
    FOREIGN KEY (summon_id) REFERENCES summon(summon_id) 
);

--Tabla de chats.
CREATE TABLE chat (
	chat_id INT PRIMARY KEY AUTO_INCREMENT,
	name_chat varchar(20),
	chat_type varchar(10)
);

--Tabla de mensajes.
CREATE TABLE message_user (
	message_id INT PRIMARY KEY AUTO_INCREMENT,
	content_message TEXT,
	message_type varchar (10),
	sent_date datetime
);

--Tabla de notificaciones.
-- Esta tabla permite que un usuario tenga varias notificaciones.
CREATE TABLE notification_chat (
	notification_id INT PRIMARY KEY AUTO_INCREMENT,
	user_main_id INT NOT NULL,
    FOREIGN KEY (user_main_id)REFERENCES user_main(user_main_id),
	content_message TEXT
);

--Tabla puente entre los chats y los usuarios.
-- Esta tabla permite que un chat tenga varios usuarios.
-- Esta tabla permite que un usuario tenga varios chats.
CREATE TABLE chat_user (
	chat_user_id INT PRIMARY KEY AUTO_INCREMENT,
	chat_id INT not null,
    FOREIGN KEY REFERENCES chat(chat_id),
	user_main_id INT NOT NULL,
    FOREIGN KEY (user_main_id)REFERENCES user_main(user_main_id)
);

--Tabla puente entre los mensajes y los chats.
-- Esta tabla permite que un chat tenga varios mensajes.
CREATE TABLE chat_message_id (
	chat_message_id INT PRIMARY KEY AUTO_INCREMENT,
	chat_id INT not null,
    FOREIGN KEY REFERENCES chat(chat_id),
	message_id INT not null,
    FOREIGN KEY (message_id) REFERENCES message_user(message_id)
);

--Tabla de tipos de actividades.
CREATE TABLE activity_type (
    activity_type_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

--Tabla de actividades.
CREATE TABLE activity (
    activity_id INT PRIMARY KEY AUTO_INCREMENT,
	activity_name VARCHAR(50) NOT NULL,
    activity_type_id INT NOT NULL,
    topic_id INT NOT NULL,
    score_activity DECIMAL(10,2),

    FOREIGN KEY (activity_type_id) REFERENCES activity_type(activity_type_id),
    FOREIGN KEY (topic_id) REFERENCES topic(topic_id)
);

--Tabla de actividades de tipo sopa de letras.
CREATE TABLE activity_word (
    word_id INT PRIMARY KEY AUTO_INCREMENT,
    activity_id INT NOT NULL,
    word VARCHAR(50) NOT NULL,
    FOREIGN KEY (activity_id) REFERENCES activity(activity_id)
);

--Tabla de actividades de tipo crucigrama.
CREATE TABLE activity_grid (
    grid_id INT PRIMARY KEY AUTO_INCREMENT,
    activity_id INT NOT NULL,
    grid_text TEXT NOT NULL,
    grid_size INT NOT NULL,
    FOREIGN KEY (activity_id) REFERENCES activity(activity_id)
);

--Tabla de docentes en los colegios.
-- Esta tabla permite que un colegio tenga varios docentes.
-- Esta tabla permite que un docente tenga varios colegios.
CREATE TABLE school_professor (
	school_professor_id INT PRIMARY KEY AUTO_INCREMENT,
	school_id INT NOT NULL,
	FOREIGN KEY (school_id) REFERENCES school(school_id),
	professor_id INT NOT NULL,
	FOREIGN KEY (professor_id) REFERENCES professor(professor_id)
);

--Tabla de fotos de los usuarios.
CREATE TABLE user_photo (
	user_photo_id INT PRIMARY KEY AUTO_INCREMENT,
	user_main_id INT NOT NULL,
	FOREIGN KEY (user_main_id) REFERENCES user_main(user_main_id),
	photo varchar(255) NOT NULL
);

--Tabla de calificaciones de las asignaturas.
CREATE TABLE subject_score (
	subject_score_id INT PRIMARY KEY AUTO_INCREMENT,
	student_id INT NOT NULL,
	FOREIGN KEY (student_id) REFERENCES student(student_id),
	subject_id INT NOT NULL,
	FOREIGN KEY (subject_id) REFERENCES subject_school(subject_id),
	academic_term_id INT NOT NULL,
	FOREIGN KEY (academic_term_id) REFERENCES academic_term(academic_term_id),
	score DECIMAL(10,2) NOT NULL
);

--Tabla de promedios de las asignaturas.
-- Esta tabla permite que un estudiante tenga varios promedios de asignaturas.
-- Esta tabla permite que una asignatura tenga varios promedios.
CREATE TABLE subject_average (
	subject_average_id INT PRIMARY KEY AUTO_INCREMENT,
	student_id INT NOT NULL,
	FOREIGN KEY (student_id) REFERENCES student(student_id),
	subject_id INT NOT NULL,
	FOREIGN KEY (subject_id) REFERENCES subject_school(subject_id),
	academic_term_id INT NOT NULL,
	FOREIGN KEY (academic_term_id) REFERENCES academic_term(academic_term_id),
	average DECIMAL(10,2) NOT NULL
);

--Tabla de asignaturas de los docentes.
-- Esta tabla permite que un docente tenga varias asignaturas.
-- Esta tabla permite que una asignatura tenga varios docentes.
CREATE TABLE professor_subject (
	professor_subject_id INT PRIMARY KEY AUTO_INCREMENT,
	professor_id INT NOT NULL,
	FOREIGN KEY (professor_id) REFERENCES professor(professor_id),
	subject_id INT NOT NULL,
	FOREIGN KEY (subject_id) REFERENCES subject_school(subject_id)
);