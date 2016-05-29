--
-- Database: `sggs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `user` varchar(15) NOT NULL,
  `pass` varchar(150) CHARACTER SET macce COLLATE macce_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `user`, `pass`) VALUES
(1, 'sggs', 'd93591bdf7860e1e4ee2fca799911215');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(141) NOT NULL,
  `date` date NOT NULL,
  `venue` varchar(51) NOT NULL,
  `imgname` varchar(151) NOT NULL,
  `description` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(51) NOT NULL,
  `image` varchar(61) NOT NULL,
  `designation` varchar(51) NOT NULL,
  `email` varchar(51) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `description` varchar(15000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `image`, `designation`, `email`, `contact`, `description`) VALUES
(7, 'Dr. Balwant Singh Dhillon', 'director.jpg', 'FOUNDER DIRECTOR', 'balwantdhillon@yahoo.com', '9855057624', 'Dr.Balwant Singh Dhillon (b. Feb.5, 1950) currently Adjunct Professor, has been the Founder Director (2011-Feb.2015), Centre for Studies on Sri Guru Granth Sahib, Guru Nanak Dev University, Amritsar; Professor and Head, Department of Guru Nanak Studies; Dean of Faculty of Humanities and Religious Studies. He has also served on the Senate and Syndicate of Guru Nanak Dev University, Amritsar. He did his Master in History from University of Rajasthan, Jaipur (1974); and in Religious Studies from Punjabi University, Patiala (1976) and was awarded Ph. D. by Guru Nanak Dev University, Amritsar in1985 for his thesis on The Sikh Gurus and the Mughal State.Dr. Dhillon specializes in the study and analysis of documents/manuscripts in Rajasthani, Hindi, Gurmukhi and Persian. He is a keen scholar of Sikh Studies, especially history, religion and literature. So far he has published/edited a dozen of books and contributed more than hundred papers published in research journals, books and encyclopedias. Among his earlier works Parmukh Sikh te Sikh Panth presents an exhaustive account of the expansion of Sikh Panth during the early 17th century and Early Sikh Scriptural Tradition: Myth and Reality responds to the issues that have cropped up from the textual studies of the Sikh scripture. He has also produced critical text of Sri Gur Panth Parkash (by Rattan Singh Bhangu), the only Sikh source on eighteenth century Sikh history. His latest work on the Eighteenth Century Persian Historiography on Banda Singh Bahadur brings into light a number of contemporary and eye witness accounts which have remained ignored by the scholars. He has been the Editor of two research journals- Journal of Sikh Studies, and Perspectives on Guru Granth Sahib both published by Guru Nanak Dev University, Amritsar. He has organized a number of National and International seminars/conferences at Guru Nanak Dev University, Amritsar. His participation in seminars/conferences at National and International level has been very consistent and fruitful. His contribution to the field of Sikh Studies, especially the study of Sikh scripture, history and religion, the Sikh institutions and their role in the formation of Sikh identity, analysis of contemporary sources of the Sikh tradition and several other debatable issues in Sikh history and religion is commendable. Presently, some important research projects are in progress under his supervision. Besides he is working on two projects--Rajasthani Sources of the Sikh History and Persian Sources on the Sikh Gurus.'),
(8, 'Dr Gulzar Singh Kang', 'prof kang 3.jpg', 'OFFICATING DIRECTOR', '', '', 'Dr. Gulzar Singh Kang (02 September 1954) is currently Director of Centre on Studies in Sri Guru Granth Sahib, GNDU, Amritsar. He did M.A. Punjabi April 1977, M.A. Religious Studies 1992 and Ph.D. (Concept of Shabad in Sikhism) Punjabi University, Patiala. His specialization is in Medieval Punjabi literature and Sikh Studies. He has published 18 books and contributed more than 50 papers published in reputed journals and books. Among his earlier works â€œShabad Anubhav te Darshanâ€ is a scholarly work in the field of Sikh Philosophy. â€œSufimat Silsile te Saadhakâ€, â€œMiran Shah Jalandhari Jivan te Rachnaâ€ and four volumes of â€œS.G.B. Singh dian Durlabh Likhtaanâ€ are some other major works done by him. Recently he has published a Expositions of Japuji Sahib under the title of â€œJapuji Sahib: Bahupakhhi Viakhiaâ€. He pays keen interest in collecting the old manuscripts of Punjabi literature and Sikhism. Some of them he had in his collections are old more than 350 years. For his academic achievements he has been awarded by many institutions. Some of the awards are: on 26 January 2007 by Dr. A.P.J. Abdul Kalam (President of India), S. Kapoor Singh memorial award by Bhai Randhir Singh Trust, Ludhiana, Kesgarh Sahib Anandpur Sahib, Guru Gobind Singh Study circle etc.Dr. Gulzar Singh Kang is soon going to publish a Book on â€œGurmat Chetna te Chintanâ€. Currently he is working on Expositions of Sri Guru Granth Sahib.'),
(9, 'Singh Sahib Joginder Singh Vedanti', 'vedanti2.jpg', '', '', '', 'Singh Sahib Joginder Singh Vedanti served as Jathedar of the Akal Takht since March of 2008. One would think this is a position which gives one the status of being, perhaps, the most senior figure in the Sikh community in India and perhaps throughout the world. He has wide knowledge of Sikh tradition and Sikh scripture. Currently he is working as a chief advisor in the exegesis Sri Guru Granth Sahib.'),
(10, 'Dr. N. Muthu Mohan', 'n.jpg', '', 'm_uthumohan@yahoo.co.in', '09443195624', 'Dr. N. Muthu Mohan is M.Sc (Chemistry, Peoplesâ€™ Friendship University, Moscow, USSR, 1982) and Ph.D (The Becoming of Indian Philosophy, Moscow State University, USSR, 1987). His specialization is Sikhism, Indian Philosophy and Religious Studies. He worked as Lecturer (1987-1995), Reader (1995-2003) and Professor (2003-2013) in Guru Nanak Devji Chair and later Department of Guru Nanak Studies of Madurai Kamaraj University, Madurai, Tamil Nadu. He was also the Chairperson of the School of Religions, Philosophy and Humanist Thought, Madurai Kamaraj University, Madurai. He served as the Deputy Coordinator of the DRS-SAP-UGC (Phase I) 2002-2007 and Coordinator DRS-SAP-UGC (Phase II) 2007-2012. He was also the Deputy Coordinator for the UPE Projects for the School of Religions, Philosophy and Humanist Thought, MKU. He was a Member of Senate, Madurai Kamarai University for the period of 1995-2013. He took the Administrative responsibilities of Additional Controller of Examinations (2009-2010) and Director (2010-2011) of the Directorate of Distance Education, Madurai Kamaraj University, Madurai. He has published more than 25 books both in English and Tamil, and around hundred papers in regional, national and International journals. 5 of books are on Sikhism. He has visited USSR (Education), United Kingdom (Training in Religious Studies), Singapore and Sri Lanka for presenting papers at International Conferences. He is the recipient of Best Book and Best Article Awards from Tamil Nadu State Government, Thiruppur Tamil Sangam, Tamil Nadu Art and Literary Association and Bhai Vir Singh Sahitya Sadan, New Delhi. Presently (from November 2013), Dr. N. Muthu Mohan is serving as the Professor in the Centre on Studies in Sri Guru Granth Sahib, Guru Nanak Dev University, Amritsar, Punjab. His project at the Centre is â€œWriting Sikh Philosophy on its Own Termsâ€.He can be visited at nmuthumohan@wordpress.com for his latest articles in Tamil and English.'),
(11, 'Dr. Amarjit Singh', 'amarjit.jpg', '', 'amarjitprincipal@yahoo.co.in', '91-94174-05209', 'Dr. AMARJIT SINGH is presently working as Professor in Centre on Studies in Sri Guru Granth Sahib, Guru Nanak Dev University Amritsar. He is a member of â€˜Board of Studiesâ€™ for Masters in Sikh Studies at Sri Guru Granth Sahib World University, Fatehgarh Sahib, Punjab. He has done his graduation from Punjab University Chandigarh with Honors in Economics and Masters in Religious Studies and M. Phil. in Religious Studies from Punjabi University Patiala (1989). He was awarded Ph.D degree on â€˜Rahitnama Sahit da Adiainâ€™ (1996) by Guru Nanak Dev University Amritsar. After completing studies he worked (1990 to 1998) as a Professor at Shahid Sikh Missionary College Amritsar run by SGPC Amritsar. He has been Director-Principal (1998-2014) of Guru Kashi College of Sikh Studies Talwandi Sabo, Takhat Sri Damdama Sahib Bathinda. He has got about 23 years teaching and research experience. He specializes in the study of primary Sikh sources and analysis of manuscripts of Gurbani. He is a keen scholar of Sikh Studies, especially Sikh Code of Conduct, religion and literature. He has edited/authored Gurbilas Patshahi 6 (ed.), â€˜Baba Banda Singh Bahadur Jiwan de Hall: 300 Swalâ€™-2010, â€˜Baba Nidhan Singh: Jiwan te Yogdanâ€™ (ed.)-2012, â€˜Mudhle Sikh Sarot te Sikh Rahitâ€™-2013, Langar te Daswand Sanstha de Smajak Sarokar (ed.)-2014, Sri Guru Granth Sahib: Bani Beora te Adab Satkar-2014. He has also published more than 40 Research papers and articles on Sikh Philosophy, History and Sikh way of life. Dr. Ganda Singh Memorial Trust Patiala awarded First Prize to his Research Paper â€˜Importance of Kirtan in Gurmatâ€™(1991) and Special Prize to â€˜Role and Status of Women in Sikhismâ€™ (1990). He has organized and participated in various National and State level seminars/conferences. His contribution to the field of Sikh Studies, especially the study of Sikh Code of Conduct, Scripture and religion is laudable. Presently he is working on the projects of Sikh Perspective on the Others: A Source Book, â€˜Interpretation and Making of the Sikh Code of Conductâ€™ and â€˜Gurbani de Mudhle Kharian di Samikhiaâ€™'),
(12, 'Amar Singh', 'prof Amar Singh.JPG', '', '', '', 'Name : Amar Singh Dr. Fatherâ€™s Name : S. Mukand Singh Date of Birth : 1st May 1967 Address : 44-D, Chahal Enclave, Passey Road, Patiala amarniamatpur@yahoo.com (Mob. 99155-11744) Qualifications M.A. (Religious Study-1993), Ph.D. (Sant Attar Singh Ji Di Dharmik ate Samajik Khetar Vich Den-2009) Designation Professor, Centre on Studies in Sri Guru Granth Sahib, Guru Nanak Dev University, Amritsar Works Done Books - 14 1. Line Index of Sri Guru Granth Sahib (ed.) Language Department, Punjab-1999 2. Bani Guru Nanak Dev ji (Line Index) (co- ed.) Punjabi University, Patiala-1999 3. Bani Guru Amar Dass ji (Line Index) (ed.) Punjabi University, Patiala-1996 4. Bani Guru Ram Dass ji (Line Index) (co- ed.) Punjabi University, Patiala-1998 5. Bani Guru Angad Dev ji (Path, Line Index, Concordence & Dictionary.) (co- ed.) Punjabi University, Patiala-1995 6. Bani Bhagat Ravidas ji (Path, Line Index, Concordence & Dictionary.) (ed.) Punjabi University, Patiala-1995 7. Bani Bhagat Namdev ji (Path, Line Index, Concordence & Dictionary.) (co- ed.) Punjabi University, Patiala-1997 8. Atirikt Bhagat Bani (Path, Line Index, Concordence & Dictionary.) (co- ed.) Punjabi University, Patiala-1997 9. â€˜Haumaeâ€™ Da Gurmat Paripekh (ed.) Kalgidhar Trust, Baru Sahib-1999 10. â€˜Satsangatâ€™ Da Gurmat Paripekh (ed.) Prof. Sahib Singh Gurmat Trust, Patiala-1999 11. â€˜Nadarâ€™ Da Gurmat Paripekh (ed.) Prof. Sahib Singh Gurmat Trust, Patiala-2000 12. Sant Attar Singh Ji Di Dharmik ate Samajik Khetar Vich Den, Madaan Publishing House, Patiala-2012 13. Relative Index of Sri Gur Panth Parkash (Ratan Singh Bhangu) Lokgeet Parkashan, Chandigarh-2014 14. Descriptive List of Hand Written Manuscripts of Sri Guru Granth Sahib, Volume-1 (Completed and ready for publication) Resarch Papers, Articles & Radio Talks - 16 Digitization of Hand written Manuscripts 1. Sri Guru Granth Sahib : 330 2. Dasam Granth : 50 3. Pothies and other Sikh Scriptures : 280 4. Printed Important Books : 1237 For C. D. Punctuation in Faridkoti Teeka, for â€˜Isher Micro Mediaâ€™ CD by Bhai Baljinder Singh, Rara Sahib Projects in hand Digitization & Preparing descriptive lists of Hand Written Manuscripts of Sri Guru Granth Sahib Honours Sant Gurmukh Singh Award-2000 (By Guru Arjun Kirtan Mandal, Patiala)'),
(13, 'Dr. Jaswinder Kaur Dhillon', 'Dr. jaswinder kaur Dhillon.JPG', '', '', '', 'Dr. (Mrs) Jaswinder Kaur Dhillon is M.A.(Philosophy, Rajasthan University, Jaipur, 1970) and Ph.D. (Concept of Values in GuruNanak Bani, Guru Nanak Dev University, Amritsar, 1978). Her specialization is in Sikh Studies and Sikh Philosophy. She worked in Department of Guru Nanak Studies, Guru Nanak Dev University, Amritsar as lecturer, (1977-85), Reader (1985-93) and Professor (1993-2007). She was Head of Department of Guru Nanak Studies and Dean Faculty of Humanities and Religious Studies from 1987 to 1990. She was a member of Senate, Chairperson Press and Publication Bureau, also the Chairperson of Sexual Harassment Committee of GNDU, Amritsar and member of Planning Board and several other committees of GNDU Amritsar. She also worked on Bhagat Puran Singh Chair and Guru Ravidas Chair of Guru Nanak Dev University, Amritsar. She is the author and editor of seven books out of which one is in English, one in Hindi and other in Punjabi. She has written almost 150 articles in different journals of English, Punjabi and Hindi. She was editor of Journal of Sikh Studies, Journal of the Department of Guru Nanak Studies, GNDU, Amritsar from 1987 to 1990. At present, she is visiting Professor in the Centre on Studies in Sri Guru Granth Sahib, GNDU, Amritsar and working on S. Manmohan Singhâ€™s Punjabi-English dictionary of Gurbani.'),
(14, 'Dr. Dharam Singh', 'dharam_singh.jpg', '', 'sangherag@yahoo.com', '950-145-1256', 'Ph.D. <br />\r\nEditor-in-Chief of the Encyclopedia of Sikhism Masterâ€™s degrees in History, Ph.D. Written six books and hundreds of general papers and about three dozen research paper'),
(15, 'Gurbir Singh Brar', 'gurbir_singh.jpg', '', 'gurbirsinghbrar@gmail.com', '', 'Gurbir Singh Brar, 44, an engineer by training is the founder CEO of a software company with operations in USA and India. An acclaimed photographer whose work is best explored in The Valiant Ones - a photographic portrayal of the eighteenth century stalwarts who define the Sikh faith. Gurbir is on the board of a number of educational institutions providing opportunities to the youth of Punjab. He has set up a non-profit, Sava lakh Foundation, to address waywardness in our youth, foster women empowerment and to focus on good health and a secure future. Currently, visiting professor with Guru Nanak Dev University, Amritsar he is working on documenting the relics of Sikh Gurus. Over the past three and a half years he traveled all over India to capture high-resolution pictures and record oral histories related to the relics of the Sikh Gurus. The coffee table book encapsulating this endeavor is to be published in summer 2016.'),
(16, 'Dr. Gurnam Singh Sanghera', 'sanghera.jpg', '', 'sangherag@yahoo.com', '9501451256', 'Dr. Gurnam Singh Sanghera has his Masterâ€™s degrees in History, Medical social work Political Theology and Medical counseling from different universities in U.K. and Canada. He did his Ph.D. on Sikhism and interfaith relations from Punjabi University. Was Principal of a secondary school in Punjab(1960-62). Was a teacher in Bradford (U.K.) till 1977. Was active in pressure group movements against reecism and discrimination. Was instrumental in getting the first Race Relations act enacted by the government of U.K. in 1965. Was member UNOâ€™s European committee. Was Case Manager in the health Department in Vancouver, British Columbia. Was research officer handling the problems faced by patients in the hospital system. Was active in multiculturalism, problems of minorities especially discrimination against the Sikhs. Was radio and T.V. host in Vancouver for ten years dealing with socio-economic and diasporan issues. Has been regular column writer in Punjabi weekly paper in U.K. and in Canada, dealing with socio-religious, economic and Sikh issues since 1967- till to day. He has written six books and hundreds of general papers and about three dozen research paper on different aspects of Sikh religion, bioethics, genetic engineering Modern challenges and Sri Guru Granth Sahib(issues from caste, settlement in diaspora and Sikh religion, climate crisis, identity and Sri Guru Granth Sahib).<br />\r\nAcademic M.A. (History)M.A. (Sociology U.K.) M.A.(Medical counseling and social work) university of British Columbia, Canado) B.E.D.'),
(17, 'Gurcharan Singh Bal', 'gurcharan_singh_bal.JPG', '', '', '', '............................'),
(18, 'Sukhpal Singh', 'Sukhpal singh.JPG', '', 'sukhpalsinghudhoke@gmail.com', '9464986446', 'Masters degree in Punjabi and Religious study Published eight research papers in reputed research journals/books/seminars'),
(19, 'Dr. Ruby vig', 'Ruby vig.JPG', '', 'rubypuri57@yahoo.com', '9888766700', 'M.A., M.Phil(Music), Ph.D <br />\r\nPublished seven research papers in reputed research journals/books'),
(20, 'Lakhvir Kaur', 'lakhvir kaur.JPG', '', 'lakhvir68@gmail.com', '9465837626', 'Masters degree(Punjabi) <br />\r\nTwo research papers in reputed research journals/books.'),
(21, 'Bindu', 'Bindu.JPG', '', 'bindu.dube@yahoo.com', '9417796601', 'M.A Philosophy, Msc. IT. and M.C.A <br />\r\nProject Fellow in the Centre on studies in Sri Guru Granth Sahib'),
(22, 'Salinder Singh', 'salinder singh (2).jpg', '', 'salinder.singh05@gmail.com', '94640 07737', 'Ph.D, holds Masters and M.Phill(Punjabi) Edited two books and published Eight research papers in reputed research journals/books'),
(23, 'Gurmail Singh', 'gurmail singh.JPG', '', 'gurmailhk@gmail.com', '9815474486', 'Masters degree (Religious Studies)<br />\r\nResearch papers in reputed research journals/books'),
(24, 'Rajbir kaur', 'Rajbir kaur.JPG', '', 'gill.rajbirkaur@gmail.com', '8146524313', 'M.Phil.(Punjabi) <br />\r\nPublished eight research papers in reputed research journals/books'),
(25, 'Sandeep Kaur', 'sandeep.jpg', '', 'simmisimu@yahoo.com', '9876611032', 'Masters degree and m.phill (philosophy) <br />\r\nDesignation: Project Fellow'),
(26, 'Harpreet kaur', 'Harpreet kaur.JPG', '', 'hk.cssggs@gmail.com', '8437946668', 'Masters degree (Punjabi)<br />\r\npublished four research papers in reputed research journals/books'),
(27, 'Dr. Jatinder Singh', 'jatinder singh.JPG', '', 'jatindersinghbatala@yahoo.com', '82830-27370', 'M.A. (Music Inst.), M.Phil,Ph.D <br />\r\nPublished three research papers in reputed research journals'),
(28, 'Rajwinder Singh', 'Rajwinder Singh.JPG', '', 'singh.rajwinder49@gmail.com', '9501300459', 'Masters degree(Religious Study) <br />\r\nPublished seven research papers in reputed research journals/books'),
(29, 'Sukhdeep Singh', 'sukhdeep singh.JPG', '', 'deepsukh13g@gmail.com', '8427844772', 'Masters Degree (Religious Studies) <br />\r\nPublished three research papers in reputed research journals/books and seminars'),
(30, 'Dr. Harpal Singh', 'Harpal singh.JPG', '', 'rubypuharpalsinghbughari57@gmail.com', '7837470881', 'Doctorate (Religious Studies) <br />\r\nPublished six research papers in reputed research journals/books.'),
(31, 'Charnjit Singh', 'Charnjit singh.JPG', '', 'Chan.Dhindsa@yahoo.com', '9463518308', 'Masters degree and m.phill (Punjabi) <br />\r\nProject Fellow in the Centre on studies in Sri Guru Granth Sahib Two research papers in reputed research journals/books.'),
(32, 'Dr. Rupinder Kaur', 'Rupinder kaur.JPG', '', 'rupinderrose85@gmail.com', '9646827108', 'Doctorate (Religious ) <br />\r\nPublished four research papers in reputed research journals/books.'),
(33, 'Bikramjit Singh', 'Bikram Singh.JPG', '', 'bikramjitsingh070@gmail.com', '8872813941', 'Masters degree and m.phill (Religious study) <br />\r\nbikramjitsingh070<br />\r\n'),
(34, 'Mohd Altaf Bhat', 'Altaf Mohd.JPG', '', 'altaf191111@gmail.com', '9803284248', 'Master degree');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
