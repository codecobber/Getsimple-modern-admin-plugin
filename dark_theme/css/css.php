<style>
/** CSS **/

/*
 * CSS php dynamic
 * DO NOT TIDY!
 * @uses color variables $primary0 - $primary6, $secondary_0-$secondary_1 	
 *
 */

/** GLOBAL RESETS **/

:link,:visited {
	text-decoration: none}

h1,h2,h3,h4,h5,h6,pre,code {
	font-size: 1em;
	font-weight: 400;
	word-wrap: break-word;
}

ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,body,html,p,blockquote,fieldset,input {
	margin: 0;
	padding: 0;
}

body {
	height: 100%;
	

    font-family: 'Open Sans', sans-serif;


	font-size: 12px;
			background:#222831;

	color: black;
}

a img,
:link img,
:visited img {
	border: none;
}

.clear {
	clear: both;
}

.unformatted {
	white-space: pre;
	font-family: Consolas, "Andale Mono WT", "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", "DejaVu Sans Mono", "Bitstream Vera Sans Mono", "Liberation Mono", "Nimbus Mono L", Monaco, "Courier New", Courier, monospace;
	line-height: 15px;
	font-size: 11px;
	display: block;
	padding-bottom: 15px;
	color: #555;
	overflow: auto;
}

#help {
	display: none;
}

.imgthumb {
	display: none;
	width: 70px;
}

.imgthumb img {
	border: 1px solid #555;
}

.hidden {
	display: none;
}

html {
	overflow-y: scroll;
}

.clearfix:before, .clearfix:after {
	content: "\0020";
	display: block;
	height: 0;
	visibility: hidden;
}

.clearfix:after {
	clear: both;
}

.clearfix {
	zoom: 1;
}

:: selection {
	text-shadow: none !important;
	background: #a8d1ff;
	color: #111;
}

:: -moz-selection {
	text-shadow: none !important;
	background: #a8d1ff;
	color: #111;
}

:: -webkit-input-placeholder {
	color: #c3c3c3;
}

: -moz-placeholder {
	color: #c3c3c3;
}

/* hide input placeholders on focus */
input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; } /* FF 4-18 */
input:focus::-moz-placeholder { color:transparent; } /* FF 19+ */
input:focus:-ms-input-placeholder { color:transparent; } /* IE 10+ */

/** HEADER / NAVIGATION **/
.header {
	color: #FFF;
	border-top: 0;
background:#393e46;
padding-top:20px;
}

.header .wrapper {
	height: 95px;
	position: relative;
	border: none;
}

.wrapper .nav {
	list-style: none;
	font-size: 14px;
	position: absolute;
	bottom: 10px;
	left: 0;
	width: 960px;
}

.wrapper .nav li a {
padding: 7px 20px;

text-decoration: none !important;

display: block;

border-radius: 5px 5px 0px 0px;

border-radius: 5px;

font-weight:bold !important;
}

.wrapper .nav li a:link, 
.wrapper .nav li a:visited, 
.wrapper #pill li a:link, 
.wrapper #pill li a:visited {
color: #AFC5CF;

background: #222831;

text-shadow: 1px 1px 0px rgba(0,0,0,.3);
}

.wrapper #pill li.debug a:link,
.wrapper #pill li.debug a:visited,
.wrapper #pill li.debug a:hover {
	color: #fff;
	background: #cc0000;
	padding: 4px 10px;
	font-weight: 700 !important;
	text-decoration: none !important;
	display: block;
	border-left: 1px solid <?php echo $primary_3; ?>;
}

#edit .wrapper .nav li a.pages,
#pages .wrapper .nav li a.pages,
#menu-manager .wrapper .nav li a.pages,
#plugins .wrapper .nav li a.plugins,
#settings .wrapper .nav li a.settings,
#components .wrapper .nav li a.theme,
#theme .wrapper .nav li a.theme,
#sitemap .wrapper .nav li a.theme,
#theme-edit .wrapper .nav li a.theme,
#navigation .wrapper .nav li a.theme,
#upload .wrapper .nav li a.files,
#image .wrapper .nav li a.files,
#backups .wrapper .nav li a.backups,
#support .wrapper .nav li a.support,
#log .wrapper .nav li a.support,
#health-check .wrapper .nav li a.support,
#backup-edit .wrapper .nav li a.backups,
#archive .wrapper .nav li a.backups, 
#load .wrapper .pages li a.pages,
#load .wrapper .plugins li a.plugins,
#load .wrapper .settings li a.settings,
#load .wrapper .theme li a.theme,
#load .wrapper .files li a.files,
#load .wrapper .backups li a.backups,
#load	.wrapper .support li a.support,
#load .wrapper .nav li a.current,
#loadtab .wrapper .nav li a.current {
	color: <?php echo $primary_1; ?>;
	background: #f6f6f6;
		background: -moz-linear-gradient(top, #FFF 3%, #F6F6F6 100%);	/* firefox */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(3%,#FFF), color-stop(100%,#F6F6F6));	/* webkit */
	font-weight: bold !important;
	text-shadow: 1px 1px 0px rgba(255,244,255,.2);
	box-shadow: rgba(0,0,0, 0.10) 2px -2px 2px;
		-moz-box-shadow: rgba(0,0,0, 0.10) 2px -2px 2px;  
		-webkit-box-shadow: rgba(0,0,0, 0.10) 2px -2px 2px;
}

.wrapper .nav li a:active, 
.wrapper .nav li a:focus, 
.wrapper .nav li a:hover, 
.wrapper #pill li a:hover, 
.wrapper #pill li a:focus {
	color: #FFF;
	background: <?php echo $primary_0; ?>;
	text-shadow: 1px 1px 0px rgba(0,0,0,.4);
}

.wrapper .nav li {
	float: left;
	margin: 0 8px 0 0;
	position: relative;
}

.wrapper .nav li.rightnav {
	float: right;
	margin: 0 0 0 0;
	font-size: 11px;
 }

.wrapper .nav li.rightnav a.first {
	padding: 4px 10px;
	text-decoration: none !important;
	display: block;
	border-radius: 0 3px 3px 0;
	border-left: 1px solid <?php echo $primary_3; ?>;
}

.wrapper .nav li.rightnav a.last {
	padding: 4px 10px;
	text-decoration: none !important;
	display: block;
	border-radius: 3px 0 0 3px;
}

/* warning alert on tab */
.nav li.rightnav .warning, .nav li.rightnav .info {
	position: absolute;
	top: -5px;
	left: -5px;
}

.nav li .warning, .nav li .info {
	position: absolute;
	top: -5px;
	right: -5px;
	font-size: 10px;
	color: #000;
	text-shadow: 1px 1px 0px rgba(255,255,255,.5);
	font-weight: bold;
	text-align: center;
	border-radius: 2px;
	display: block;
	width: 11px;
	border: 1px solid #FFCC33;
	background: #FFFF66;
	background: -moz-linear-gradient(top, #FFFF66 0%, #FFCC33 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FFFF66), color-stop(100%,#FFCC33));
}

.nav li .info {
	font-family: serif;
	border: 1px solid #2DB1FF;
	background: #6FCCFF;
	background: -moz-linear-gradient(top, #BDF2FF 0%, #6FCCFF 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#BDF2FF), color-stop(100%,#6FCCFF));
}

.wrapper .nav li a em, .wrapper #pill li a em {
	font-style: normal;
}

.wrapper .nav li a:hover em, .wrapper .nav li a:focus em {
	border-bottom: 1px dotted #666;
}

.wrapper #pill {
	list-style: none;
	position: absolute;
	top: 0px;
	right: 0;
	font-size: 11px;
}

.wrapper #pill li {
	float: right;
}

.wrapper #pill li.leftnav a {
	padding: 4px 10px;
	text-decoration: none !important;
	display: block;
	border-radius: 0 0 3px 0;
	border-left: 1px solid <?php echo $primary_3; ?>;
}

.wrapper #pill li.rightnav a {
	padding: 4px 10px;
	text-decoration: none !important;
	display: block;
	border-radius: 0 0 0 3px;
}

.wrapper {
	margin-left: auto;
	margin-right: auto;
	width: 960px;
	text-align: left;
padding-top: 20px;
}

.wrapper p {
	line-height: 18px;
	margin: 0 0 20px 0;
	color:#666;
}

.wrapper #maincontent ul, 
.wrapper #maincontent ol {
	line-height: 18px;
	margin: 0 0 20px 30px;
}

.wrapper a:link, 
.wrapper a:visited {
color: #333;

text-decoration: underline;

font-weight: 300;

padding: 5px 15px;
}

.wrapper a:hover {
	color: #333;
	text-decoration: underline;
	font-weight: bold;
}

.inner {
	padding: 20px;
}

.header h1 {
	font-size: 25px;
font-family: 'Open Sans', sans-serif;
font-weight:300;
	position: absolute;
	color:#b55400;
	top: 5px;
	left: 0;
}

.header h1 a:link,
.header h1 a:visited,
.header h1 a:hover {
	font-weight: normal;
	color:#eee;
	text-decoration: none;
}

.header h1 a:hover  {
	color:#eee;
}

.wrapper h2 {
	font-size: 18px;
	font-family: Georgia, Times, Times New Roman, serif;
	color: #777;
	margin: 0 0 20px 0;
}

.wrapper h2 span {
	color: #bbb;
	font-style: italic;
}

h3 {
	font-size: 19px;
	
	color: #b55400;
	margin: 0 0 20px 0;
	text-shadow: 1px 1px 0 #fff;
}

h3.floated {
	font-size: 18px;
	
	color: #b55400;
	padding: 2px 0 0 0;

	float: left;
	display: block;
	margin: 0 0 5px 0;
}

h5,
div.h5 {
	margin: 10px 0 10px 0;
	font-size: 14px;
	line-height: 28px;
	display: block;
	padding: 3px 10px;
	background: #EEEEEE;
		background: -moz-linear-gradient(top, #f6f6f6 3%, #EEEEEE 100%);	/* firefox */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(3%,#f6f6f6), color-stop(100%,#EEEEEE));	/* webkit */
	border: 1px solid #cccccc;
	text-shadow: 1px 1px 0 rgba(255,255,255,0.5);
	color: #999;
}

h5 a {
	text-decoration: none !important;
}

h5 img, 
tr.folder img {
	vertical-align: middle;
	margin: 0 5px 0 0;
	opacity: .5;
}

h5:hover img {
	opacity: 1;
}

.bodycontent ul, 
.bodycontent ol {
	margin: 0 0 20px 30px;
}

.bodycontent ul p, 
.bodycontent ol p {
	margin: 0 0 10px 0;
}

#maincontent {
	width: 690px;
	float: left;
	text-align: left;

}

#sidebar {
	width: 225px;
	float: right;
}

#sidebar.fixed{
	-transition: top .2s ease-out;
		-webkit-transition: top .2s ease-in-out;
		-moz-transition: top .2s ease-in-out;
		-o-transition: top .2s ease-in-out;
}

#sidebar .section {
	background: #fff;
	border: 1px solid #ccc;
	padding: 20px;
	margin: 0 0 30px 0;
	line-height: 18px;
}

#sidebar .section p.small {
	font-size: 11px;
	margin: 15px 0 0 0;
}

#sidebar .section input.text {
	width: 175px;
	font-size: 11px;
	padding: 4px;
	border: 1px solid #666;
}

#sidebar .snav {
	list-style: none;
	margin: 0 0 30px 0;
}

#sidebar .snav ul {
	list-style: none;
	margin: 0;
}

#sidebar .snav li {
	margin: 0 0 3px 0;
}

#sidebar .snav li ul li {
	margin: 0 0 3px 0;
}

#submit_line {
	margin: 15px 0 15px 0;
}

#sidebar #js_submit_line {
	margin: 0 0 0 12px;
}

#sidebar .snav li a {
	display: block;
padding:10px;
	text-decoration: none;
	border-radius: 3px;
	margin-bottom:5px;
	
}

#sidebar .snav li a:link, 
#sidebar .snav li a:visited {
	margin-left: 13px;
	color: <?php echo $primary_6; ?>;
	background: <?php echo $primary_1; ?>;
	text-shadow: 1px 1px 0px <?php echo $primary_0; ?>;
	transition: all .2s ease-in-out;
		-webkit-transition: all .2s ease-in-out;
		-moz-transition: all .2s ease-in-out;
		-o-transition: all .2s ease-in-out;
}

#sidebar .snav li a.current {

    
    cursor: default;
    color: #FFF;
    background: #b55400;
    text-shadow: 1px 1px 0px #9F2C04;

 border-radius: 3px;
 box-shadow: 1px 1px 1px #000;
 padding:10px;

}

#sidebar .snav li a.current:hover {
	
    cursor: default;
    color: #FFF;
    background: #b55400;
    text-shadow: 1px 1px 0px #9F2C04;
   
    border-radius: 5px;
    box-shadow: 1px 1px 1px #000;
	 padding:10px;

}

#sidebar .snav li a:hover {
	color: #FFF;
	background: <?php echo $primary_0; ?>;
	margin-left: 13px;
	text-shadow: 1px 1px 0px rgba(0,0,0,.25);
}

#sidebar .snav li a em  {
	font-style: normal;
}

#sidebar .snav li a:hover em, 
#sidebar .snav li a:focus em {
	border-bottom: 1px dotted #666;
}

#sidebar .snav li a.current:hover em, 
#sidebar .snav li a.current:focus em  {
	border-bottom: 1px dotted #fff;
}

#sidebar .snav small {
	color: #666;
}

.edit-nav {
	margin: 0 0 15px 0;
}

.edit-nav a {
	font-size: 10px;
	text-transform: uppercase;
	display: block;
	padding: 3px 10px;
	float: right;
	margin: 0 0 0 5px;
	border-radius: 3px;
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
	background-repeat: no-repeat;
	background-position: 94% center;
}

.edit-nav select {
	margin-top: -3px;
	float: right;
	padding: 1px;
	border: 1px solid #999;
	font-size: 11px;
	border-radius: 2px;
		-moz-border-radius: 2px;
		-webkit-border-radius: 2px;
}

.edit-nav p {
	float: right;
	font-size: 11px;
	margin: 0;
}

.edit-nav label {
	display: inline;
	font-size: 11px;
	color: #666;
	margin: 0;
	padding: 0;
}

.edit-nav a#metadata_toggle {
	background-image: url('images/plus.png');
	padding-right: 20px;
}

.edit-nav a#metadata_toggle.current {
	background-image: url('images/minus.png');
	 padding-right: 20px;
}

.edit-nav {
	height: 1%;
}

.edit-nav a:link, 
.edit-nav a:visited {
	line-height: 14px !important;
	background-color: <?php echo $primary_1; ?>;
	color: #ccc;
	font-weight: bold;
	text-decoration: none;
	text-shadow: 1px 1px 0px rgba(0,0,0,.2);
	transition: all .10s ease-in-out;
		-webkit-transition: all .10s ease-in-out;
		-moz-transition: all .10s ease-in-out;
		-o-transition: all .10s ease-in-out;
}

.edit-nav a:hover, 
#sidebar .edit-nav a:hover, 
.edit-nav a.current {
	background-color: <?php echo $secondary_1; ?>;
	color: #FFF;
	font-weight: bold;
	text-decoration: none;
	line-height: 14px !important;
	text-shadow: 1px 1px 0px rgba(0,0,0,.2);
}

.edit-nav a:link em, 
.edit-nav a:visited em {
	font-style: normal;
}

.edit-nav a.current em, 
.edit-nav a:hover em, 
.edit-nav a:focus em {
	font-style: normal;
	border-bottom: 1px dotted #FFF;
}

/* basic default table style */
.wrapper table {
	border-collapse: collapse;
	margin: 0 0 20px 0;
	width: 645px;
}

.wrapper table td {

    vertical-align: top;
    padding: 4px;
    border-bottom: 1px solid rgba(0,0,0,0.2);
    border-top: 1px solid #eee;
    line-height: 20px !important;
    padding: 10px 4px;
  
    font-size: 12px;
    font-weight: 300;

}

.wrapper table th {

    background: #FFF !important;
    padding: 10px;
    font-size: 11px;
    border-top: 1px solid #FFF;
    color: #222;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 20px !important;
    text-align: center;
    border-radius: 5px;
    font-weight: 300;

}
.wrapper table tr.head {
}

.wrapper table td span {
	font-size: 12px;
	color: #777;
}

.wrapper table.highlight {
	text-shadow: 1px 1px 0 #fff;
}

.wrapper table.highlight tr:nth-child(odd) {
	 background: #f7f7f7;
}

.wrapper table tr#tr-index a {
	 font-weight: bold color:#b55400 !important;
}

.wrapper table.highlight tr:hover {
	background: #FFFFD5 !important;
	text-shadow: none;
}

.wrapper table tr.currentpage{
	 background: #FFFFD1;
}

.wrapper table tr {
	border-bottom: 1px solid #eee;
	border-top: 1px solid #eee;
	transition: background-color .1s ease-in-out;
		-webkit-transition: background-color .1s ease-in-out;
		-moz-transition: background-color .1s ease-in-out;
		-o-transition: background-color .1s ease-in-out;
}

table td a {
	font-weight: normal !important;
}

.wrapper table.healthcheck tr td {
	font-size: 12px;
}

.popup table td {
	padding: 4px;
}

.popup table a:link, 
.popup table a:visited {
	color: <?php echo $primary_3; ?>;
	text-decoration: underline;
}

.popup table a:hover {
	color: #333;
	text-decoration: underline;
}

sup {
	color: #666;
	vertical-align: baseline;
	font-size: 0.8em;
	position: relative;
	top: -0.4em;
}


/* default form css */
#maincontent .main {
    font-family: 'Open Sans', sans-serif;

    padding: 20px;
    background: #eeeeee;
    border: 0px solid #c8c8c8;
    margin: 0 0 30px 0;
    border-radius: 5px;
    box-shadow: 1px 1px 10px #000;

}

#maincontent .main .section {
	padding-top: 40px;
}

#themecontent{
	/* replaces #maincontent on theme editor page, fix for the above style interferring with codemirror for now */
	padding: 20px;
	background: white;
	border: 1px solid #C8C8C8;
	margin: 0 0 30px 0;
	box-shadow: rgba(0,0,0, 0.06) 0px 0px 4px;
		-moz-box-shadow: rgba(0,0,0, 0.06) 0px 0px 4px;
		-webkit-box-shadow: rgba(0,0,0, 0.06) 0px 0px 4px;
	border-image: initial;
}

form p {
	margin: 0 0 10px 0;
}

form input.text, 
form select.text {
color: #333;

border: 1px solid #ddd;

padding: 8px;

font-family: Arial, Helvetica Neue, Helvetica, sans-serif;

font-size: 12px;

width: 510px;

border-radius: 5px;
}

form select.text {
	width: 521px;
	padding: 4px 5px;
}

input.text:focus, 
select.text:focus, 
textarea.text:focus {
	outline: none;
	border: 1px solid #666 !important;
	box-shadow: rgba(0,0,0, 0.10) 0px 0px 6px;
		-moz-box-shadow: rgba(0,0,0, 0.10) 0px 0px 6px;
		-webkit-box-shadow: rgba(0,0,0, 0.10) 0px 0px 6px;
}

form textarea {
	width: 635px;
	height: 420px;
	line-height: 18px;
	text-align: left;
	color: #333;
	border: 1px solid #aaa;
	padding: 5px;
	font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
	font-size: 12px;
	border-radius: 2px;
	tab-size:4; 
	 -moz-tab-size:4; 
	 -o-tab-size:4; 
}

form input.text:disabled,
form select.text:disabled,
form textarea.text:disabled {
	color: #808080;
	background: #eeeeee;
}

form input[readonly], form select[readonly], form textarea[readonly] {
	background: #eeeeee;
	border: 1px solid #999;
	color: #666;
	cursor: default;
}

form input.capslock {
	background-image: url('images/capslock.png');
	background-position: right center;
	background-repeat: no-repeat;
}

textarea#codetext {
	height: 660px;
	width: 99%;
	font-family: Consolas, Monaco, "Courier New", Courier, monospace;
	font-size: 12px;
	line-height: 18px;
	overflow: scroll;
	overflow-y: scroll;
	overflow-x: scroll;
	 
}

#menu-items span {
	text-transform: lowercase;
}

label {
	padding: 5px ;
	margin: 0;
	color: #222;
	display: block;
	font-size: 12px;
	font-weight: 400;

}

label span.right {
	float: right;
	color: #999;
	display: inline-block;
	margin-right: 15px;
	font-size: 11px !important;
}

label span.right a:link, 
label span.right a:visited {
	font-size: 11px;
	color: #999;
	text-decoration: none;
}

label span.right a:focus, 
label span.right a:hover {
	font-size: 11px;
	color: #333;
	text-decoration: underline;
}

.inline label {
	display: inline-block;
	padding-top: 3px;
}

/* meta dropdown style */
#metadata_window {
	margin: 0 2px 20px 0;
	background: #f9f9f9;
	border: 1px solid #e8e8e8;
	padding: 15px 10px 5px 10px;
	border-radius: 2px;
	text-shadow: 1px 1px 0 rgba(255,255,255,.3);
}

#metadata_window .rightopt {
	float: right;
	width: 48%;
}

#metadata_window .leftopt {
	float: left;
	width: 48%;
}

#metadata_window .wideopt {
	clear:both;
	width: 100%;
}

#metadata_window p {
	margin: 0 0 15px 0;
}

#metadata_window input, 
#metadata_window select, 
#metadata_window textarea {
	width: 97%;
	font-size: 11px;
	padding: 3px;
	margin: 0 !important;
}

#metadata_window .wideopt input, 
#metadata_window .wideopt select, 
#metadata_window .wideopt textarea {
	width: 99%;
}	

#metadata_window input#post-menu-enable {
	width: 20px;
	padding: 0;
	margin: 0;
}

#metadata_window textarea {
	 height: 62px;
	margin-bottom: 0;
	line-height: 15px;
}

#metadata_window select {
	 width: 100%;
}

#metadata_window select.text.autowidth {
	width: 155px;
	float: right;
}

#metadata_window p.post-menu {
	margin-bottom: 5px;
}

#metadata_window a.viewlink img {
	vertical-align: baseline;
	margin-left: 15px;
	opacity: .5;
}

#metadata_window a.viewlink:hover img {
	opacity: 1;
}

#metadata_window #menu-items {
	height: 50px;
	background: #222;
	padding: 5px 10px 0 10px;
	position: relative;
}

#metadata_window #menu-items #tick {
	margin-top: -10px;
	left: 5px;
	position: absolute;
}

#metadata_window #menu-items input, 
#metadata_window #menu-items select {
	border: 1px solid #000;
	border-radius: 0;
}

#metadata_window #menu-items span label {
	text-shadow: none;
	display: inline-block;
	font-size: 11px;
	line-height: 16px;
	color: #e3e3e3;
	font-weight: normal;
	margin: 0;
	padding: 0;
}

#metadata_window #menu-items select {
	padding: 2px 3px;
}

#countdownwrap {
	display: inline-block;
	color: #999;
	font-size: 11px;
	font-weight: normal;
	float: right;
}

#countdownwrap strong {
	color: #555;
	font-weight: normal;
}

form table.formtable select {
	width: 275px;
	padding: 3px 4px;
}

table.cleantable {
	border-collapse: collapse;
	margin: 0 0 0 0;
}

table.cleantable tr {
	border: none;
}

table.cleantable tr td {
	border: none;
}

#autosavenotify {
	padding: 15px 0 0 13px;
	color: #666;
	text-shadow: 1px 1px 0 #fff;
	font-size: 11px;
}

#pagechangednotify {
	margin: 0px;
	padding: 15px 0 0 13px;
	color: #CC0000;
	text-shadow: 1px 1px 0 #fff;
	font-size: 11px;
}

p.backuplink {
	text-shadow: 1px 1px 0 rgba(255,255,255,.3);
	color: #888;
	font-size: 11px;
	margin: 20px -20px -20px -20px;
	padding: 10px 8px 10px 40px;
	background: #f9f9f9 url('images/clock.png') 20px center no-repeat;
	border-top: 1px solid #eee;
}

.editing {
	font-size: 10px;
	padding: 3px;
	display: block;
	margin-top: -13px;
	margin-bottom: -10px;
	color: #888;
	font-style: italic;
}

/* form submit button style */
/*
input.submit {
	padding: 5px 12px;
	font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
	font-weight: bold;
	cursor: pointer;
}*/

input.submit, .button {
font-size:11px;
background:#b55400;
color:#fff;
border-radius:5px;
border:0;

padding:10px;
text-transform:uppercase;
	text-decoration: none !important;
	padding: 7px 15px;
	text-shadow: 0 1px 0 rgba(255,255,255,.5);
padding:10px;
transition:all 1s ease;
}

input.submit:focus, input.submit:hover, .button:hover {
	color: #fff;
background:#914401;
box-shadow:1px 1px 3px #000; 
}

.button {
	padding: 3px 7px;
}

.leftsec {
	float: left;
	width: 50%;
	padding-bottom: 5px;
}

.rightsec {
	float: left;
	width: 50%;
	padding-bottom: 5px;
}

.widesec {
	clear: both;
	width: 100%;
	padding-bottom: 5px;
}

.widesec input.text, .rightsec input.text, .leftsec input.text {
	width: 92%;
}	

.widesec input.text, .rightsec select.text, .leftsec select.text {
	width: 96%;
}

/* edit css */
form input.title {

    font-size: 19px;
    border-color: #999;
    width: 97.5%;
    padding: 10px;
    border: solid 0;
    box-shadow: 1px 1px px #000;

}

form input.secondary {
	width: 280px;
}

/* components css */
form.manyinputs input.text {
	width: 230px;
}

form.manyinputs textarea {
	width: 632px;
	height: 200px;
}

form.manyinputs p {
	margin: 0 0 25px 0;
}

.compdiv {
	padding: 10px 0 35px 0;
}

table.comptable {
	margin: 0px !important;
	width: 645px;
	background: #fff;
	border: none;
	padding: 0;
}

table.comptable tr td {
	font-size: 12px;
	border: none;
	padding: 0;
}

table.comptable tr td code {
	font-size: 11px;
	color: #666;
	padding: 0 4px 0 0;
	display: block;
	font-family: Consolas, Monaco, "Courier New", Courier, monospace;
}

table.comptable tr {
	border: none;
	border: none !important;
}

table.comptable tr td input.newtitle {
	margin-bottom: 2px !important;
}

.wrapper a.component {
	float: left;
	font-weight: bold;
	margin: 0 5px 5px 0;
	padding: 3px 10px;
	text-decoration: none;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-khtml-border-radius: 3px;
	-webkit-border-radius: 3px;
}

.wrapper a.component:link, .wrapper a.component:visited {
	color: #666;
	background: #fff;
	border: 1px solid #999;
	text-decoration: none;
}

.wrapper a.component:hover {
	color: <?php echo $primary_6; ?>;
	background: <?php echo $primary_1; ?>;
	border: 1px solid <?php echo $primary_0; ?>;
	text-decoration: none;
}

.compdivlist {
	padding: 30px 0;
	text-align: center;
	margin: 0 0 0 15px;
	overflow: auto;
}

/* Notification styles
 *
 * alerts are now notifications 
 * use notify and notify_type
 * .error and .upddated are still supported for legacy alerts
 *
 */ 

.updated, .error, .notify {
	border: solid #eee;
	border-radius: 5px;
	background: #FFFBCC;
	line-height: 22px;
	padding: 5px 10px;
	margin-bottom: 20px;
}

.updated p, .error p, .notify p {
	margin: 0;
	line-height: 22px;
}

.error, .notify_error {
	color: #333;
	border-color: #cc0000;
	background: #F9DFDD;
		background: -moz-linear-gradient(top, #FCF0EF 0%, #F9DFDD 100%);	/* firefox */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FCF0EF), color-stop(100%,#F9DFDD));	/* webkit */
}

.notify_ok {
	border-color: #eee;
	color: #333;
	background: #eee;
}

.notify_info {
	border-color: #2850C1;
	color: #2850C1;
	background: #edf4ff;	/* Old browsers */
		background: -moz-linear-gradient(top,  #edf4ff 0%, #d7e7ff 100%);	/* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#edf4ff), color-stop(100%,#d7e7ff));	/* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #edf4ff 0%,#d7e7ff 100%);	/* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #edf4ff 0%,#d7e7ff 100%);	/* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #edf4ff 0%,#d7e7ff 100%);	/* IE10+ */
		background: linear-gradient(to bottom,  #edf4ff 0%,#d7e7ff 100%);	/* W3C */
		filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#edf4ff', endColorstr='#d7e7ff',GradientType=0 );	/* IE6-9 */
}

.notify_warning {
	border-color: #878314;
	color: #878314;
	background: #fffed5;	/* Old browsers */
		background: -moz-linear-gradient(top,  #fffed5 0%, #fffdbf 100%);	/* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fffed5), color-stop(100%,#fffdbf));	/* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #fffed5 0%,#fffdbf 100%);	/* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #fffed5 0%,#fffdbf 100%);	/* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #fffed5 0%,#fffdbf 100%);	/* IE10+ */
		background: linear-gradient(to bottom,  #fffed5 0%,#fffdbf 100%);	/* W3C */
		filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#fffed5', endColorstr='#fffdbf',GradientType=0 );	/* IE6-9 */
}

.deletedrow {
	background-color: #FFB19B;
}

.error code, 
.notify code {
	color: #990000;
	font-size: 11px;
	font-family: Consolas, "Andale Mono WT", "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", "DejaVu Sans Mono", "Bitstream Vera Sans Mono", "Liberation Mono", "Nimbus Mono L", Monaco, "Courier New", Courier, monospace;
	 
	line-height: 14px;
	background: #fff;
	opacity: .8;
	padding: 1px;
}

.updated,
#temp_good_flash {
	color: #333; font-size:13px;
}

.hint {
	color: #777;
	-ms-word-break: break-all;
	    word-break: break-all;
	    word-break: break-word; 
	-webkit-hyphens: auto;
	   -moz-hyphens: auto;
	        hyphens: auto;
}

/* file listing table style */
#filetypetoggle {
	color: #999;
	font-size: 12px;
}

table td.delete {
	width: 20px;
	text-align: center;
}

table td.delete a {
	font-size: 18px !important;
	line-height: 16px;
}

.view {
	width: 48px;
	text-align: center;
}

.editl {
	width: 40px;
	text-align: center;
}

.editlw {
	width: 220px;
	text-align: left;
}

.delete a:link, 
.delete a:visited {
	color: #999 !important;
	text-decoration: none !important;
	padding: 1px;
	display: block;
	line-height: 16px;
	font-size: 12px;
	font-weight: normal;
	-webkit-transition: all .02s ease-in-out;
	-moz-transition: all .02s ease-in-out;
	-o-transition: all .02s ease-in-out;
	transition: all .02s ease-in-out;
	font-style:normal;
}

.delete a:hover {
	background: #D94136 !important;
	color: #fff !important;
	text-decoration: none !important;
	padding: 1px;
	line-height: 16px;
	display: block;
	font-size: 12px;
	font-weight: normal;
}

a.cancel:link, 
a.cancel:visited {	 
	color: #D94136 !important;
	text-decoration: underline;
	padding: 1px 3px;
	background: none !important;
	line-height: 16px;
	-webkit-transition: all .02s ease-in-out;
	-moz-transition: all .02s ease-in-out;
	-o-transition: all .02s ease-in-out;
	transition: all .02s ease-in-out;
}

a.cancel:hover {
	background: #D94136 !important;
	color: #fff !important;
	text-decoration: none !important;
	padding: 1px 3px;
	line-height: 16px;
}

a.cancel em {
	font-style: normal;
}

.wrapper .secondarylink {
	width: 20px;
	text-align: center;
	font-size: 12px;
	line-height: 14px;
}

.wrapper .secondarylink a:link, 
.wrapper .secondarylink a:visited {
	color: #aaa;
	text-decoration: none;
		font-weight: normal;
	padding: 1px;
	display: block;
	line-height: 16px;
	-webkit-transition: all .15s ease-in-out;
	-moz-transition: all .15s ease-in-out;
	-o-transition: all .15s ease-in-out;
	transition: all .15s ease-in-out;
}

.wrapper .secondarylink a:hover {
	background: <?php echo $primary_3; ?>;
	color: #FFF;
	text-decoration: none;
	font-weight: normal;
	padding: 1px;
	display: block;
	line-height: 16px;
}

.delete a:link, .delete a:visited, .wrapper .secondarylink a:link, .wrapper .secondarylink a:visited, a.cancel:link, a.updatelink:link{
	border-radius:3px;
}

/* backup info display */
table.simple td {
	border: 1px solid #eee;
	border-collapse: collapse;
	color: #555;
	font-size: 12px;
	padding: 4px 10px 4px 4px;
}

table.simple {
	width: 100%;
	border: 1px solid #aaa;
}

table.simple td.title {
	width: 125px;
	color: #222;
	font-weight: bold;
}


/* footer */
#footer {

	text-shadow: 0;
	margin: 40px 0 0 0;
	padding: 10px 0;
	font-size: 11px;
	color: #888;
}

#footer p {
	margin: 0 0 8px 0;
}

#footer a:link, 
#footer a:visited {
	color: #888;
}

#footer a:focus, 
#footer a:hover {
	font-weight: 100;
	color: #333;
}	
#footer .gslogo a {
	float: right;
	width: 60px;
	text-align: right;
	opacity: .10;	
}

#footer .footer-left {
	float: left;
	width: 100%;
}

#footer .gslogo a:link,
#footer .gslogo a:visited  {
	transition: opacity .2s ease-in-out;
		-webkit-transition: opacity .2s ease-in-out;
		-moz-transition: opacity .2s ease-in-out;
		-o-transition: opacity .2s ease-in-out;
}

#footer .gslogo a:hover  {
	opacity: 1;
}

.toggle {
	display: none;
}

.editable {
	padding: 3px 1px;
	cursor: pointer;
	transition: background-color .3s ease-in-out;
		-webkit-transition: background-color .3s ease-in-out;
		-moz-transition: background-color .3s ease-in-out;
		-o-transition: background-color .3s ease-in-out;
}

.editable:hover {
	 background: #FCFBB8;
}

.wrapper table td span.ERRmsg {
	color: #D94136;
	font-color: 12px;
}

.wrapper table td span.OKmsg {
	color: #308000;
	font-color: 12px;
}

.wrapper table td span.WARNmsg {
	color: #FFA500;
	font-color: 12px;
}

.wrapper table td span.INFOmsg {
	color: #2B5CB3;
	font-color: 12px;
}

.wrapper table.highlight tr.img-highlight {
	background: #FFFFD1 !important;
}

.wrapper table.highlight tr.img-highlight td a.primarylink {
	font-weight: bold !important;
}


#sidebar .uploadform {
	padding: 5px 15px;
}


/* JQuery Uploadify Styles */
.uploadifyQueueItem {
	font-size: 10px;
	padding: 8px 15px;
	width: 190px;
}

.uploadifyError {
	color: #D94136 !important;
}

.uploadifyError .uploadifyProgressBar {
	background-color: #D94136 !important;
}

#sidebar .snav li .cancel {
	float: right;
}

#sidebar .snav li .cancel a:link,
#sidebar .snav li .cancel a:visited,
#sidebar .snav li .cancel a:hover {
	padding: 0 !important;
	margin: 0 4px 0 0 !important;
	width: 11px !important;
	opacity: .8;
	background: transaparent !important;
}

.uploadifyProgress {
	background-color: #FFF;
	margin-top: 5px;
	width: 97%;
}

.uploadifyProgressBar {
	background-color: <?php echo $primary_6; ?>;
	width: 1px;
	height: 4px;
}

#sidebar .snav li.upload {
	display: block;
	border-radius: 4px;
		-moz-border-radius: 4px;
		-khtml-border-radius: 4px;
		-webkit-border-radius: 4px;
	margin-left: 13px;
	color: #FFF;
	background: <?php echo $primary_1; ?>;
}

.uploadifyButton {
	width: 100%;
	border-radius: 4px;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
	display: block;
	font-weight: bold;
	/*color: #AFC5CF;*/
	/*background: #182227;*/
	color: <?php echo $primary_6; ?>;
	background: <?php echo $primary_1; ?>;	
	text-shadow: 1px 1px 0px #0E1316;
	transition: all .3s ease-in-out;
		-webkit-transition: all .3s ease-in-out;
		-moz-transition: all .3s ease-in-out;
		-o-transition: all .3s ease-in-out;
}

.uploadify:hover .uploadifyButton {
	background-color: #0e1316;
	color: #ffffff;
	text-shadow: 1px 1px 0px #000;
}

.uploadifyButtonText{
	padding: 5px 15px 5px 15px;
	display: block;
}

#uploadify object {
	position: absolute;
	left: 0;
	 right: 0;
	cursor: pointer;
}


/* Image Editor Styles */
textarea.copykit {
	font-family: Consolas, "Andale Mono WT", "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", "DejaVu Sans Mono", "Bitstream Vera Sans Mono", "Liberation Mono", "Nimbus Mono L", Monaco, "Courier New", Courier, monospace;
	font-size: 12px;
	outline: none
	color: #666;
	border: 1px solid #aaa;
	line-height: 17px;
	padding: 4px;
	border-radius: 2px;
		-moz-border-radius: 2px;
		-khtml-border-radius: 2px;
		-webkit-border-radius: 2px;
	width: 98%;
	height: 70px;
	margin-bottom: 10px;
}

#handw {
	z-index: 1;
	padding: 8px;
	background: #000;
	opacity: .80;
	color: #fff;
	font-size: 11px;
	width: 150px;
	text-align: center;
	margin: -50px 0 0 0;
}

#handw span {
	font-size: 15px;
	font-weight: bold;
}

#jcropform .submit {
	margin: 20px 0 0 0;
}

#jcrop_open {
}

a.updatelink:link, 
a.updatelink:visited {
	color: #CF3805;
	padding: 1px 3px;
}

a.updatelink:hover, 
a.updatelink:focus {
	color: #FFF;
	background-color: #2AA206;
	padding: 1px 3px;
}


/* File Browser Styles */
#filebrowser {
	background: #fff;
}


/* plugin styles */
table tr.enabled {
	background: #fff;
}

#maincontent table tr.enabled td span {
	color: #333;
}

table tr.disabled {
	background: #f6f6f6;
}

table tr.disabled td b {
	color: #666;
}


/* Logged out specific styles */
body#index {
	background: #272C34;
}

#index .header,
#resetpassword .header,
#setup .header,
#install .header,
#setup .gslogo,
#install .gslogo,
#index .gslogo,
#resetpassword .gslogo {
	display: none;
}

#index #maincontent,
#resetpassword #maincontent,
#setup #maincontent,
#install #maincontent {
	width: 100%;
}

#index #maincontent .main,
#resetpassword #maincontent .main,
#setup #maincontent .main,
#install #maincontent .main {
	margin: 50px auto 0 auto;
	float: none;
	text-align: left;
	border-radius: 5px;
		-moz-border-radius: 5px;
		-khtml-border-radius: 5px;
		-webkit-border-radius: 5px;
	box-shadow: rgba(0,0,0, 0.05) 0px 0px 10px;
		-moz-box-shadow: rgba(0,0,0, 0.05) 0px 0px 10px;
		-webkit-box-shadow: rgba(0,0,0, 0.05) 0px 0px 10px;
	background: #FFF;
	width: 645px;
}

#setup #maincontent .main {
	width: 270px;
}

#setup input.text {
	width: 250px;
}

#index #maincontent .main,
#resetpassword #maincontent .main {
	width: 315px;
	border-bottom: 1px solid #999;
	border-right: 1px solid #999;
	text-shadow: 1px 1px 0 #fff;
	background: #383737;
		background: -moz-linear-gradient(top, #f9f9f9 5%, #eeeeee 100%);	/* firefox */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(5%,#f9f9f9), color-stop(100%,#eeeeee));	/* webkit */
}

#resetpassword form input.text,
#index form input.text {
	width: 297px;
	font-size: 18px;
	padding: 5px;
	margin-top: 2px;
}

#index form input.submit {
}

#index p.cta,
#resetpassword p.cta {
	font-size: 11px;
	margin: 0 0 0 0;
	color: #999;
	text-align: center;
}

#index form p,
#resetpassword form p {
	margin-bottom: 15px;
}

#setup .error, 
#setup .updated,
#install .error, 
#install .updated,
#index .error, 
#index .updated,
#resetpassword .error, 
#resetpassword .updated {
	margin: 25px auto -23px auto;
	width: 290px;
	line-height: 18px;
	padding: 5px 10px;
}

#setup #footer,#install #footer,#index #footer, #resetpassword #footer {
	width: 270px;
	border-top: none;
	margin: 0 auto 20px auto;
	text-align: center;
}

#index .footer-left,#resetpassword .footer-left  {
	float: none;
	width: 100%;
}

.desc {
	font-size: 12px;
	line-height: 17px;
	border-bottom: 1px dotted #ccc;
	padding: 0 0 15px 0;
	margin: 0 0 5px 0;
}

#filter-search  {
	margin: 0 0 10px 0;
	display: none;
}

#filter-search input.text {
	width: 250px;
	font-size: 11px;
	padding: 3px;
}

#createfolder {
	font-size: 11px;
	text-decoration: underline !important;
}

h5 .crumbs, div.h5 .crumbs {
	float: left;
}

#new-folder {
	float: left;
	padding-left: 5px;
}

#new-folder form {
	display: none;
}

#new-folder .cancel {
	font-size: 11px;
	text-shadow: none !important;
}

#new-folder input.submit {
	font-size: 11px;
	padding: 3px;
}

#new-folder input.text {
	width: 120px;
	font-size: 11px;
	padding: 3px;
}

#edit #dropdown {
	display: inline-block;
	padding: 3px 15px;
	position: relative;
}

#edit #dropdown h6 {
	font-weight: bold;
	font-size: 11px;
	color: #777;
	margin-bottom: 5px;
	padding-right: 15px;
	display: inline-block;
	background: transparent url('images/utick.png') right center no-repeat;
}

#edit #dropdown:hover h6 {
	visibility: hidden;
}

#edit #dropdown ul {
	display: none;
	text-shadow: 1px 1px 0 #fff;
	list-style: none;
	margin: 0;
	font-size: 11px;
	opacity: 0;
	background: #f6f6f6;
	border: 1px solid #ccc;
	position: absolute;
	top: -5px;
	left: 5px;
	min-width: 100px;
	border-radius: 2px;
		-moz-border-radius: 2px;
		-khtml-border-radius: 2px;
		-webkit-border-radius: 2px;
	transition: opacity .3s ease-in-out;
		-webkit-transition: opacity .3s ease-in-out;
		-moz-transition: opacity .3s ease-in-out;
		-o-transition: opacity .3s ease-in-out;
	box-shadow: rgba(0,0,0, 0.2) 1px 1px 3px 0;
		-moz-box-shadow: rgba(0,0,0, 0.2) 1px 1px 3px 0;
		-webkit-box-shadow: rgba(0,0,0, 0.2) 1px 1px 3px 0;
	overflow: hidden;
}

#edit #dropdown li {
	line-height: 22px;
	border-bottom: #eee 1px solid;
	padding: 0 8px;
}

#edit #dropdown li:last-child {
	border: none;
}

#edit #dropdown li a:link, 
#edit #dropdown li a:visited,
#edit #dropdown li a:hover {
	color: #666;
	text-decoration: none;
	display: block;
}

#edit #dropdown li:hover {
	background: #fff;
}

#edit #dropdown li:hover a {
	color: #cc0000;
}

#edit #dropdown li.alertme:hover {
	background: #cc0000;
}

#edit #dropdown li.alertme:hover a {
	color: #FFF;
	text-shadow: none;
}

#edit #dropdown:hover ul {
	display: block;
	opacity: 1;
}

.wrapper #maincontent ul#menu-order {
	list-style: none;
	margin: 0 0 25px 0;
}

#menu-order li {
	text-shadow: 1px 1px solid rgba(255,255,255,.3);
	cursor: move;
	display: block;
	margin: 2px 0;
	border: 1px solid #eee;
	background: #fbfbfb;
	padding: 5px 10px;
}

#menu-order li:hover {
	border: 1px solid #ccc;
	background: #f6f6f6;
}

#menu-order li em {
	float: right;
	color: #666;
}

#menu-order li.placeholder-menu {
	height: 18px;
	background: #FFB164;
	border: 1px solid #FF9933;
}

#theme-edit #maincontent {
	width: 100%;
}

#theme-edit #sidebar {
	display: none;
}

#gsdebug{
	border: 1px solid #FF9933;
	padding: 5px;
	background: white;
	height: 500px;
	overflow: scroll;
	margin-bottom: 20px;
}

.ajaxwait {
	background-image: url('images/ajax.gif');
	background-position: center;
	background-repeat: no-repeat;
}

.ajaxwait_dark {
	background-image: url('images/ajax_dark.gif');
}

.ajaxwait_tint_dark {
	background-color: #F6F6F6;
}

a.disabled:link,
a.disabled:visited {
	pointer-events: none;
	cursor: default;
	text-decoration: none !important;
	color: #CCC !important;	
}

/* override handle uicolor #FFFFFF, prevents invisible seperators */
.cke_toolbar_separator {
	box-shadow: 1px 0 1px rgba(0, 0, 0, 0.14) !important;
}





#edit .wrapper .nav li a.pages, #pages .wrapper .nav li a.pages, #menu-manager .wrapper .nav li a.pages, #plugins .wrapper .nav li a.plugins, #settings .wrapper .nav li a.settings, #components .wrapper .nav li a.theme, #theme .wrapper .nav li a.theme, #sitemap .wrapper .nav li a.theme, #theme-edit .wrapper .nav li a.theme, #navigation .wrapper .nav li a.theme, #upload .wrapper .nav li a.files, #image .wrapper .nav li a.files, #backups .wrapper .nav li a.backups, #support .wrapper .nav li a.support, #log .wrapper .nav li a.support, #health-check .wrapper .nav li a.support, #backup-edit .wrapper .nav li a.backups, #archive .wrapper .nav li a.backups, #load .wrapper .pages li a.pages, #load .wrapper .plugins li a.plugins, #load .wrapper .settings li a.settings, #load .wrapper .theme li a.theme, #load .wrapper .files li a.files, #load .wrapper .backups li a.backups, #load.wrapper .support li a.support, #load .wrapper .nav li a.current, #loadtab .wrapper .nav li a.current {

    color: #fff;
    background: #222831;
    background: -moz-linear-gradient(top, #FFF 3%, #F6F6F6 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(3%,#FFF), color-stop(100%,#F6F6F6));
    font-weight: bold !important;
    text-shadow: 1px 1px 0px rgba(255,244,255,.2);
    box-shadow: rgba(0,0,0, 0.10) 2px -2px 2px;
    -moz-box-shadow: rgba(0,0,0, 0.10) 2px -2px 2px;
    -webkit-box-shadow: rgba(0,0,0, 0.10) 2px -2px 2px;

}


#edit .wrapper .nav li a.pages, #pages .wrapper .nav li a.pages, #menu-manager .wrapper .nav li a.pages, #plugins .wrapper .nav li a.plugins, #settings .wrapper .nav li a.settings, #components .wrapper .nav li a.theme, #theme .wrapper .nav li a.theme, #sitemap .wrapper .nav li a.theme, #theme-edit .wrapper .nav li a.theme, #navigation .wrapper .nav li a.theme, #upload .wrapper .nav li a.files, #image .wrapper .nav li a.files, #backups .wrapper .nav li a.backups, #support .wrapper .nav li a.support, #log .wrapper .nav li a.support, #health-check .wrapper .nav li a.support, #backup-edit .wrapper .nav li a.backups, #archive .wrapper .nav li a.backups, #load .wrapper .pages li a.pages, #load .wrapper .plugins li a.plugins, #load .wrapper .settings li a.settings, #load .wrapper .theme li a.theme, #load .wrapper .files li a.files, #load .wrapper .backups li a.backups, #load.wrapper .support li a.support, #load .wrapper .nav li a.current, #loadtab .wrapper .nav li a.current {

    color: #fff;
    background: #b55400;


}



.main p{color:#333 }

.header h1{

    font-family: 'Oswald', sans-serif;
	letter-spacing:2px;
	text-transform:uppercase;text-shadow:1px 1px 2px #000;
	font-size:24px;


}

#sitename a{
	color:#fff;
}


.nav #nav_upload .files::before{
	font-family: "Font Awesome 5 Free"; font-weight: 900; content: "\f15b";font-size:16px;margin-right:5px;
	
	
	
}


.nav #nav_pages .pages::before{
	font-family: "Font Awesome 5 Free"; font-weight: 900; content: "\f108";font-size:16px;margin-right:5px;
	
	
	
}

.nav #nav_theme .theme::before{
	font-family: "Font Awesome 5 Free"; font-weight: 900; content: "\f1fc";font-size:16px;margin-right:5px;
	
	
	
}

.nav #nav_backups .backups::before{
	font-family: "Font Awesome 5 Free"; font-weight: 900; content: "\f0a0";font-size:16px;margin-right:5px;
	
	
	
}

.plugins::before{
	font-family: "Font Awesome 5 Free"; font-weight: 900; content: "\f1e6";font-size:16px;margin-right:5px;

	transition:all 1s ease;
}

.plugins::before{
transform:scale(1.2)
}



#sb_newpage{position:relative}

#sb_newpage a::after{
	font-family: "Font Awesome 5 Free";

font-weight: 900;

content: "\f067";

font-size: 11px;

position:absolute;
right:10px;
bottom:10px;
transition:all 1s ease;
}



#sb_newpage:hover a::after{
transform:rotate(-360deg)
}





#sb_menumanager a::after{
	font-family: "Font Awesome 5 Free";

font-weight: 900;

content: "\f0c9";

font-size: 11px;

margin-left: 70px;

}






#sb_menumanager{position:relative}


#sb_menumanager a::after{
	font-family: "Font Awesome 5 Free";

font-weight: 900;

content: "\f0c9";

font-size: 11px;
position:absolute;
right:10px;
bottom:10px;
transition:all 1s ease;
}



#sb_menumanager:hover a::after{
transform:rotate(-360deg)
}


/** edit **/


#sidebar .snav li a.current {

    margin-left: 0px;
    cursor: default;
    color: #FFF;
    background: #b55400 !important;
    text-shadow: 1px 1px 0px #9F2C04;
    padding-left: 13px;
    border-radius: 3px;

}

#sidebar .snav li a.current:hover {

    margin-left: 13px;
    cursor: default;
    color: #FFF;
    background: #b55400 !important;
    text-shadow: 1px 1px 0px #9F2C04;
    padding-left: 13px;
    border-radius: 3px;

}

#maincontent .main h3.floated{
	
    font-family: 'Open Sans', sans-serif;
font-weight:bold;
	font-style:normal;
	text-transform:uppercase;
	font-size:16px;
	text-shadow:0;
	letter-spacing:1px;
}


#sidebar .snav li a:link, #sidebar .snav li a:visited {

    margin-left: 13px;
    color: ;
    background: ;
    text-shadow: 0px 0px 0px !important;
    transition: all .2s ease-in-out;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;

}

#footer .footer-left {

    float: left;
    width: 100%;
    text-shadow: 0 0 0;
    font-size: 10px;
    text-align: center;

}


.main input.submit, .button {

    font-size: 11px;
    background: #b55400;
    color: #fff !important;
    border-radius: 5px;
    border: 0;
    padding: 10px;
    text-transform: uppercase;
    text-decoration: none !important;
    padding: 7px 15px;
    text-shadow: 0 0 0 ;
    padding: 10px;
    transition: all 1s ease;

}


.main input.submit, .button:hover {

    font-size: 11px;
    background: #b55400;
    color: #fff !important;
    border-radius: 5px;
    border: 0;
    padding: 10px;
    text-transform: uppercase;
    text-decoration: none !important;
    padding: 7px 15px;
    text-shadow: 0 0 0 ;
    padding: 10px;
    transition: all 1s ease;
	box-shadow:0 0 0 !important;

}






#js_submit_line .submit{
	
	color:#fff !important;
	text-shadow:0 0 0;
	
}

.leftnav a{background:transaparent !important}

.wrapper #pill li.leftnav a{border:0;}

.wrapper .nav li.rightnav a.first {border:0;}

.wrapper table tr#tr-index a{text-decoration:none; }

.wrapper table tr:hover{background:rgba(255,255,255,1) !important;}

#editpages .delete a{padding:3px;background:#b55400;color:#fff !important;text-shadow:0 0 0 !important;}


body#index {background:#222831 !important;}



@media(max-width:800px){
	
	.wrapper{
		width:100%;
		padding:10px;
		box-sizing:border-box;
		display:flex;
		  flex-direction: column;
	}
	
.header .wrapper{width:100%;height:auto;}

.header{height:auto;}

.wrapper .nav {

    list-style: none;
    font-size: 13px;
    position: relative;
    bottom: 10px;
    left: 0;
    width: 100%;
	
	  display: flex;
 flex-wrap:wrap;
 
  justify-content: center;
  align-items: center;
  align-content: center;
}

.header h1 {

 
 
    position: relative;
    color: #b55400;
 padding:10px 0;
 text-align:center;
margin:30px 0;
}

.wrapper .nav li{
	
	position:relative;
	top:0;
	left:0;
	right:0;

}	

.wrapper .nav li{
	
 width:100%;

	padding:10px;
	box-sizing:border-box;
	text-align:center;
}	


.leftnav{}

.wrapper #maincontent{
	width:100%;
	
}

.wrapper table{
	
	width:100%;
}


#sidebar{width:100%;padding:0;margin:0;}
#sidebar .snav li a{margin:0;text-align:center;margin:0 !important;}


.rightnav{display:none;}


.wrapper #pill {

    list-style: none;
    position: position;
    top: 0px !important;
    right: 0;
    font-size: 13px;
	width:100%;
	text-align:center;
z-index:2000;


}
.wrapper #pill .leftnav  a{
	
	padding:20px;
}

.header{padding:10px 0;padding-top:0; }
.leftnav {background:#000;width:100%;}
}


#index p.cta, #resetpassword p.cta {

    font-size: 10px;
    margin: 0 0 0 0;
    color: #999;
    text-align: center;

}

#index .main{
	box-shadow:10px 10px #000;
	animation:main 1s 1 ease;
}


@keyframes main{
	from{transform:translate(0,-50px);opacity:0.5}
	to{transform:translate(0,0);opacity:1;}
	
}


#index .main .login{
	text-align:center;
	
}

#index .main h3{
	    font-family: 'Open Sans', sans-serif !important;
font-style:normal;
text-align:center;
	
}

#index #maincontent{
	
	height:100vh;
}


.navshowhide{
	width:50px;
	border-radius:5px;
	height:50px;
	display:block;
	color:#fff;
	background:#b55400;
border:solid 1px #fff;
margin:10px;

}

.showmenu{
	
}



#sidebar{
	animation:fadeIn 0.3s linear;
}

@keyframes fadeIn{
	from{opacity:0;}
	to{opacity:1;}
	
}

.edit-nav a{margin:5px;}

@media(max-width:800px){
	.edit-nav{width:100% !important; margin:0 auto !improtant;height:auto !important;;}
	
}

.rightnav{display:none;}
.max-width{width:100% !important;transition:all 0.3s linear;}

.header .wrapper .navshowhide{display:none;}
.d-none{display:none;}

.btn-rwd-menu{ margin:10px;display:none;}

@media (max-width:800px){
.btn-rwd-menu{display:block; margin:20px auto; }
.responsive{display:none !important}	

.main .floated{width:100%;text-align:center;}
}


</style>
