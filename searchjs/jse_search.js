



var include_num = 1;
var bold = 0;

// ---------- sites ----------


var s = new Array();

s[0] = "Home^index.php^Centre on Studies in Sri Guru Granth Sahib, Guru Nanak Dev University, Amritsar established on 1st April 2011, has completed five years of its existence. It owes its origin to the public announcement of 1St September 2004 made by the then Prime Minister of India, Dr. Manmohan Singh, that Govt. of India will establish a Centre in Guru Nanak Dev University, Amritsar for Studies on Sri Guru Granth Sahib.^Introduction objective Recent Events About Gyan Anjan";

s[1] = "Infrastructure^infrastructure.php^The Centre is housed in its own building known as Sri Guru Granth Sahib Bhawan. The design of the building has been prepared by the Architecture Department of Guru Nanak Dev University, Amritsar, keeping in mind the Sikh Architectural features. It is a two storey building which is spread over 70,000 square feet area.^Building Guest House Residence International";

s[2] = "Facilities^Facilities.php^The central library has been equipped with digital archives of manuscripts.The invaluable manuscripts and thesises related to sikh religion have been fully digitized. Students, researchers as well as the faculty members have access to this section of library. Bhai Gurdas Library has prepared the catalogues of bibliographic descriptions which has been compiled in five volumes available in the library which is now available in print as well as in CD/DVD form. ^INTERFAITH UNDERSTANDING DIGITIZATION OF ARCHIVES CONSERVATION LAB WITH MICROFILMING FACILITIES MUSEUM OF SIKH HISTORY AND CULTURE RECORDING ROOM";

s[3] = "Faculty^faculty.php^As the proposed research works of the Centre are of serious and delicate nature, which require professional skills and excellent academic understanding of Sikh religion, history and literature. The research projects that have been proposed can be done only if the services of mature and seasoned scholars are available. Therefore besides the regular faculty of One Director, Six Professors and Eighteen Project Fellows there is a pool of Six Visiting Professors. Superannuated scholars are requested to join as Visiting Professors to undertake short term projects relating to the thrust areas of the Centre.^Supporting Staff Team Dr. Balwant Singh Dhillon FOUNDER DIRECTOR Dr Gulzar Singh Kang";

s[4] = "Contact Us^contact_us.php^Contact Us at Phone :0183-2258802,2258809, 2450601-14 ext 3442 Email : centresggs@yahoo.com...Leave Your message^Contact Phone number email messag address";

s[5] = "Activities^activities.php^A Research Forum of the Centre known as Manthan has been set up. It meets at least once in a month where Faculty members, Visiting Professors, Guest Scholars and Project Fellows present their papers.^Manthan Lectures Seminars Counselling Services";

s[6] = "Areas Of Study^thrust.php^Sri Guru Granth Sahib presents an excellent example of co-existence, cosmopolitanism, interfaith understanding and unity in diversity.Continuous efforts by the center to contribute in communnal harmony.  ^INTERFAITH UNDERSTANDING SCRIPTURAL TRANSLATIONS SCRIPTURES MUSICOLOGY HERMENEUTIC AND LINGUISTIC SOCIAL AND CULTURE ";

s[7] = "Research^research.php^Keeping in mind the thrust areas of the Centre and specialization of the faculty various research projects have been chalked out. Our focus is on the development of research tools which may be useful for doing studies on Sri Guru Granth Sahib. Besides supplementing the sources of Sikh religion, history and literature we are working on those areas which are very crucial for the Sikh Studies but have remained ignored so far. ^Projects completed Under progress";
s[8] = "Research Publication^research_publications.php^Haqiqat-i-Sikhan by Prof. Balwant Singh Dhillon. It will be released on the inauguration of the building of the Centre.^Viakhia ate Viakhia Shastar Perspectives on Guru Granth Sahib Japuji Sahib";

s[9] = "Completed Projects^completed_projects.php^Late S. Manmohan Singh while working on the English translation of Sri Guru Granth Sahib, had worked on a Dictionary for finding out English words equivalent to terminology used in Gurbani.^Dictionary of Gurbani Up-gradation of Bibliography on Sikh Studies A Critique of Literature on Gurbani Sangeet";

s[10] = "Projects Under Progress^underprogress.php^Exposition of Sri Guru Granth Sahib.This project has been initiated by Dr. Gulzar Singh Kang, Professor in the Centre and it will incorporate some new features concerning the exposition of Gurbani....^Up-gradation of Bibliography on Sikh Studies A Critique of Literature on Gurbani Sangeet Impact of Sri Guru Granth Sahib on the Sikh Diaspora";

s[11] = "Important Videos^playlist.php^Videos..^Playlist videos ";

s[12] = "Photo Gallery^gallery.php^The photo gallery of Gyan Anjan^pics pictures photos slide show"

s[13] = "Filed Works^fieldworks.php^Most of the manuscripts, artifacts, relics and documents related to the Sikh Scripture and its literature is lying scattered all over the world in private and public libraries and collections. To execute the research projects undertaken, the scholars of the Centre are engaged in extensive field work like visiting libraries and academic institutions ...^Field works center library"



var cookies = document.cookie;
var p = cookies.indexOf("d=");

if (p != -1) {
	var st = p + 2;
	var en = cookies.indexOf(";", st);
	if (en == -1) {
		en = cookies.length;
	}
	var d = cookies.substring(st, en);
	d = unescape(d);
}
var od = d;
var m = 0;
if (d.charAt(0) == '"' && d.charAt(d.length - 1) == '"') {
	m = 1;
}

var r = new Array();
var co = 0;

if (m == 0) {
	var woin = new Array();
	var w = d.split(" ");
	for (var a = 0; a < w.length; a++) {
		woin[a] = 0;
		if (w[a].charAt(0) == '-') {
			woin[a] = 1;
		}
	}
	for (var a = 0; a < w.length; a++) {
		w[a] = w[a].replace(/^\-|^\+/gi, "");
	}
	a = 0;
	for (var c = 0; c < s.length; c++) {
		pa = 0;
		nh = 0;
		for (var i = 0; i < woin.length; i++) {
			if (woin[i] == 0) {
				nh++;
				var pat = new RegExp(w[i], "i");
				var rn = s[c].search(pat);
				if (rn >= 0) {
					pa++;
				} else {
					pa = 0;
				}
			}
			if (woin[i] == 1) {
				var pat = new RegExp(w[i], "i");
				var rn = s[c].search(pat);
				if (rn >= 0) {
					pa = 0;
				}
			}
		}
		if (pa == nh) {
			r[a] = s[c];
			a++;
		}
	}
	co = a;
}

if (m == 1) {
	d = d.replace(/"/gi, "");
	var a = 0;
	var pat = new RegExp(d, "i");
	for (var c = 0; c < s.length; c++) {
		var rn = s[c].search(pat);
		if (rn >= 0) {
			r[a] = s[c];
			a++;
		}
	}
	co = a;

}


function return_query() {
	document.s_key.d.value = od;
}

function num_jse() {
	document.write(co);
}

function out_jse() {
	if (co == 0) {
		document.write('Your search did not match any documents.<p>Make sure all keywords are spelt correctly.<br>Try different or more general keywords.');
		return;
	}
	for (var a = 0; a < r.length; a++) {
		var os = r[a].split("^");
		if (bold == 1 && m == 1) {
			var br = "<b>" + d + "</b>";
			os[2] = os[2].replace(pat, br);
		}
		if (include_num == 1) {
			document.write(a + 1, '. <a href="', os[1], '">', os[0], '</a><br>', os[2], '<p>');
		} else {
			document.write('<a href="', os[1], '">', os[0], '</a><br>', os[2], '<p>');
		}
	}

}
