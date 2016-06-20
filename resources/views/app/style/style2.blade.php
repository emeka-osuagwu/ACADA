

<style type="text/css">
/*----------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------


    Default Theme Desktop CSS


------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------*/
html {
  position: relative;
  min-height: 100%;
}
body {
  padding: 0px;
  margin: 0px;
  padding-top: 65px;
  background: #f1f1f1;
  font-family: 'Helvetica Neue', 'Helvetica', Arial;
  -webkit-font-smoothing: antialiased;
}
body.home {
  padding-top: 0px;
}
body.home .navbar-default {
  background: none;
}
body.home .navbar-default.headroom--not-top {
  background: rgba(0, 0, 0, 0.7);
}
body.home .navbar-default .navbar-nav > li > a {
  color: #fff;
}
body.home .navbar-default .navbar-nav > li.active > a {
  color: #DB1D1B;
}
body.home .navbar-nav.navbar-right li.login-desktop a:hover,
body.home .navbar-nav.navbar-right li.login-desktop a:active,
body.home .navbar-nav.navbar-right li.login-desktop a:focus {
  color: #fff;
}
body.home .navbar-nav.navbar-right li.signup-desktop a {
  border: 1px solid #999;
}
body.home .navbar-nav.navbar-right li.signup-desktop a:hover {
  border: 1px solid #ccc;
}
body.home #nav-toggle span,
body.home #nav-toggle span:before,
body.home #nav-toggle span:after {
  background: #fff;
}
body.home .navbar-nav > li > .dropdown-menu {
  background: rgba(0, 0, 0, 0.7);
  border: 0px;
  color: #fff;
}
body.home .navbar-nav > li > .dropdown-menu .divider {
  background-color: #343434;
}
body.home .navbar-nav > li > .dropdown-menu li a {
  color: #ccc;
}
body.home .navbar-nav > li > .dropdown-menu li a:hover {
  background: rgba(0, 0, 0, 0.3);
}
body.home .navbar-nav > li > .dropdown-menu .dropdown-submenu .open {
  background: rgba(0, 0, 0, 0.7);
}
body.home .navbar-nav > li > .dropdown-menu .dropdown-submenu .dropdown-menu {
  background: rgba(0, 0, 0, 0.7);
  border: 0px;
}
body .home-bg-gradient {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 222px;
  background: url('../img/bg-gradient.png');
  z-index: 99;
}
body .home-bg-gradient-bottom {
  position: absolute;
  bottom: 0px;
  left: 0px;
  width: 100%;
  height: 222px;
  background: url('../img/bg-gradient-bottom.png');
  z-index: 99;
}
.royalSlider {
  background: url('../img/bg-gradient.png');
}
h1 {
  color: #434a54;
  font-size: 32px;
  margin-bottom: 35px;
}
h3 {
  border-bottom: 1px solid #ddd;
  color: #aaa;
  margin-bottom: 0px;
  margin-top: 0px;
  padding-top: 0px;
  padding-bottom: 25px;
  text-align: center;
  font-size: 22px;
  text-align: left;
}
h3 span {
  font-size: 11px;
  display: inline-block;
  margin-left: 20px;
  position: relative;
  top: -2px;
}
h4 {
  color: #ccc;
  font-size: 22px;
  margin: 55px;
  font-weight: normal;
}
h4.subheadline {
  padding: 0px;
  color: #333339;
  font-weight: 400;
  margin: 25px 0px;
}
.clear {
  clear: both;
}
label {
  display: block;
}
/* Place Holder CSS */
::-webkit-input-placeholder {
  color: #ABADAC;
  opacity: 0.5;
  -webkit-transition: opacity 0.35s ease-in-out;
  transition: opacity 0.35s ease-in-out;
}
:-moz-placeholder {
  color: #ABADAC;
  opacity: 0.5;
  -moz-transition: opacity 0.35s ease-in-out;
  transition: opacity 0.35s ease-in-out;
}
::-moz-placeholder {
  color: #ABADAC;
  opacity: 0.5;
  -moz-transition: opacity 0.35s ease-in-out;
  transition: opacity 0.35s ease-in-out;
}
:-ms-input-placeholder {
  color: #ABADAC;
  opacity: 0.5;
  -ms-transition: opacity 0.35s ease-in-out;
  transition: opacity 0.35s ease-in-out;
}
/* Place Holder CSS for Focus */
:focus::-webkit-input-placeholder {
  opacity: 0;
  -webkit-transition: opacity 0.35s ease-in-out;
  transition: opacity 0.35s ease-in-out;
}
:focus:-moz-placeholder {
  opacity: 0;
  -moz-transition: opacity 0.35s ease-in-out;
  transition: opacity 0.35s ease-in-out;
}
:focus::-moz-placeholder {
  opacity: 0;
  -moz-transition: opacity 0.35s ease-in-out;
  transition: opacity 0.35s ease-in-out;
}
:focus:-ms-input-placeholder {
  opacity: 0;
  -ms-transition: opacity 0.35s ease-in-out;
  transition: opacity 0.35s ease-in-out;
}
.navbar,
.home .navbar-header {
  height: 65px;
}
.navbar > .container .navbar-brand {
  margin-left: 0px;
}
.navbar-nav.navbar-right:last-child {
  margin-right: 0px;
}
.navbar-brand {
  padding: 12px;
  padding-left: 0px;
  margin-top: 0px;
}
.navbar-brand {
  margin-top: 10px;
}
.navbar-brand img {
  height: 18px;
  width: auto;
  padding-right: 10px;
  border-right: 0px;
}
.modal-open .headroom {
  z-index: 99999;
}
.headroom {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  right: 0;
  -webkit-transition: .5s;
  -o-transition: .5s;
  -moz-transition: .5s;
  -ms-transition: .5s;
  transition: transform 0.5s ease-in-out;
  -webkit-transform: translateY(0px);
  -o-transform: translateY(0px);
  -moz-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
}
.headroom--unpinned {
  top: -65px;
  -webkit-transition: .5s;
  -o-transition: .5s;
  -moz-transition: .5s;
  -ms-transition: .5s;
  transition: .5s;
  -webkit-transform: translateY(-65px);
  -o-transform: translateY(-65px);
  -moz-transform: translateY(-65px);
  -ms-transform: translateY(-65px);
  transform: translateY(-65px);
}
.headroom--pinned {
  top: 0;
  -webkit-transition: .5s;
  -o-transition: .5s;
  -moz-transition: .5s;
  -ms-transition: .5s;
  transition: .5s;
}
.navbar-default {
  background: #FFFFFF;
  border-bottom: 0px;
  margin-bottom: 0px;
  z-index: 999998;
  width: 100%;
  position: fixed;
  top: 0px;
}
.navbar-default .navbar-toggle {
  position: absolute;
  float: left;
  margin-right: 0px;
  margin-left: 15px;
  border-width: 0px;
  margin-top: 20px;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #ccc;
}
.modal-open .navbar-default {
  z-index: 2;
}
.form-control {
  padding-top: 10px;
  padding-bottom: 10px;
  height: auto;
  border-width: 2px;
}
.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin-heading,
.form-login-heading {
  text-align: center;
  color: #cbcbcb;
  margin: 15px;
}
input {
  margin-bottom: 10px;
  border-width: 2px;
}
.form-signin p {
  text-align: center;
}
.password-reset-btn {
  margin-bottom: 20px;
}
.navbar-nav li a {
  padding: 12px 20px;
}
.navbar-default .navbar-nav > li > a:hover {
  background: none;
}
.navbar-default .navbar-nav > li > a {
  color: #333;
  background: none;
}
.navbar-nav > li > a {
  font-weight: bold;
  font-size: 14px;
  font-weight: normal;
}
.navbar-default .navbar-nav > li > a {
  -webkit-transition: background-color 0.1s ease;
  -moz-transition: background-color 0.1s ease;
  -o-transition: background-color 0.1s ease;
  -ms-transition: background-color 0.1s ease;
  transition: background-color 0.1s ease;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:focus,
.navbar-default .navbar-nav > .open > a:hover {
  background: none;
}
.navbar-default .navbar-nav > a:visited,
.navbar-default .navbar-nav > li > a:focus,
.navbar-default .navbar-nav > li > a:hover {
  color: #DB1D1B;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a {
  color: #DB1D1B;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover {
  color: #DB1D1B;
}
.navbar-default .navbar-nav > li > a {
  padding: 11px 13px;
  line-height: 13px;
  color: #ECEFF1;
  margin: 16px 5px;
  margin-bottom: 14px;
  border-radius: 2px;
  letter-spacing: 0.1px;
  color: #85878C;
  font-size: 12px;
  text-transform: uppercase;
  font-weight: 500;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  background: none;
  color: #DB1D1B;
}
.navbar-default .navbar-nav > li > a:hover {
  background: none;
}
.dropdown-submenu {
  position: relative;
}
.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: 0px;
  margin-left: 0px;
  -webkit-border-radius: 0 2px 2px 0px;
  -moz-border-radius: 0 2px 2px 0px;
  border-radius: 0 2px 2px 0px;
  padding: 0px;
  box-shadow: 0px 0px 0px;
}
.dropdown-submenu:hover > .dropdown-menu {
  display: block;
}
.dropdown-submenu > a:after {
  display: block;
  content: " ";
  float: right;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  border-left-color: #ccc;
  margin-top: 5px;
  margin-right: -10px;
}
.dropdown-submenu:hover > a:after {
  border-left-color: #ccc;
}
.dropdown-submenu.pull-left {
  float: none;
}
.dropdown-submenu.pull-left > .dropdown-menu {
  left: -100%;
  margin-left: 10px;
  -webkit-border-radius: 6px 0 6px 6px;
  -moz-border-radius: 6px 0 6px 6px;
  border-radius: 6px 0 6px 6px;
}
.dropdown-menu {
  border: 0px;
  border-right: 1px solid #eee;
  border-bottom: 1px solid #eee;
  border-top: 1px solid #f1f1f1;
}
.main-nav-row {
  margin-left: 0px;
  margin-right: 0px;
}
.navbar-right li {
  list-style: none;
}
#navbar-search-form {
  height: 65px;
}
#navbar-search-form form {
  margin-bottom: 0px;
}
#navbar-search-form form i {
  position: relative;
  left: 40px;
  color: #A5AAAB;
}
#navbar-search-form form input {
  height: 65px;
  border: 0px;
  padding-left: 50px;
  border-left: 1px solid #f1f1f1;
  border-right: 1px solid #f1f1f1;
}
#navbar-search-form form input:focus {
  outline: 0;
}
.navbar-nav > li > .dropdown-menu {
  -webkit-box-shadow: 0px 0px 0px;
  box-shadow: 0px 0px 0px;
}
.navbar-nav.navbar-right li.signup-desktop,
.navbar-nav.navbar-right li.login-desktop {
  border-left: 0px;
  border-right: 0px;
}
.navbar-default .navbar-nav > li.login-desktop a {
  font-weight: light;
  position: relative;
}
.navbar-nav.navbar-right li.signup-desktop a {
  color: #5D6468;
  text-transform: uppercase;
  padding-left: 30px;
  background: none;
  border: 1px solid #ddd;
  padding-top: 7px;
  padding-bottom: 8px;
  padding-right: 8px;
  margin-top: 18px;
}
.navbar-nav.navbar-right li.signup-desktop a i {
  position: absolute;
  font-size: 18px;
  left: 6px;
  top: 5px;
}
.navbar-nav.navbar-right li.signup-desktop a:hover {
  border-color: #bbb;
}
.navbar-nav.navbar-right li.login-desktop a {
  color: #5D6468;
}
.navbar-nav.navbar-right li.login-desktop a:hover,
.navbar-nav.navbar-right li.login-desktop a:active,
.navbar-nav.navbar-right li.login-desktop a:focus {
  background: none;
  color: #2D3438;
}
/********** HOME HERO **********/
.featured {
  margin-bottom: 0px;
  padding-bottom: 20px;
  padding-top: 20px;
  background: none;
  display: block;
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffffff+0,f1f1f1+100 */
  background: #f1f1f1;
  /* Old browsers */
  /* IE9 SVG, needs conditional override of 'filter' to 'none' */
  background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmMWYxZjEiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
  background: -moz-linear-gradient(top, #ffffff 0%, #f1f1f1 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(100%, #f1f1f1));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #ffffff 0%, #f1f1f1 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, #ffffff 0%, #f1f1f1 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(top, #ffffff 0%, #f1f1f1 100%);
  /* IE10+ */
  background: linear-gradient(to bottom, #ffffff 0%, #f1f1f1 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f1f1f1', GradientType=0);
  /* IE6-8 */
}
.bottom_bar {
  width: 100%;
  height: 50px;
  background: #f9f9f9;
  display: block;
}
.bottom_bar h3,
.bottom_bar h1 {
  color: #47484B;
  margin: 0px;
  border-bottom: 1px;
  line-height: 50px;
  float: left;
  font-size: 13px;
  margin-right: 5px;
}
.bottom_bar h1 {
  color: #999;
  font-weight: normal;
  font-size: 12px;
}
.bottom_bar h3 {
  font-size: 10px;
  font-weight: bold;
  max-height: 30px;
  overflow: hidden;
  line-height: 48px;
  color: #75777F;
}
.bottom_bar .notification {
  float: left;
}
.bottom_bar .social {
  float: right;
}
.bottom_bar a:first-child {
  border-left: 1px solid #25252A;
}
.bottom_bar a.share {
  width: 30px;
  height: 30px;
  text-align: center;
  display: block;
  padding: 5px;
  margin-top: 10px;
  float: left;
  transition: all 0.3s ease-in-out;
}
.bottom_bar a.share i {
  color: #95979F;
  transition: all 0.3s ease-in-out;
}
.bottom_bar a.share:hover i {
  color: #222;
}
#home-content h3 {
  text-transform: uppercase;
  font-weight: 200;
  padding-bottom: 30px;
  border-bottom: 0px;
}
#home-content h3 a {
  line-height: 38px;
  color: #AAAAAA;
  font-weight: 200;
  transition: color 0.3s linear;
}
#home-content h3 a:hover {
  text-decoration: none;
  color: #78797F;
  transition: color 0.3s linear;
}
#home-content h3 span.more {
  font-size: 30px;
  position: absolute;
  color: #bbb;
  top: 1px;
}
#home-content h3 i {
  font-size: 30px;
  top: 7px;
  position: relative;
  margin-right: 10px;
}
/********** END HOME HERO **********/
/********** HOME OPTINBAR **********/
#optinbar {
  position: absolute;
  bottom: 0px;
  background: #171C1F;
  width: 100%;
  padding: 15px;
}
#optinbar .container {
  padding-right: 18px;
}
#optinbar p {
  color: #5C5D5E;
  font-size: 12px;
  line-height: 12px;
  padding-top: 13px;
}
#optinbar input {
  border-radius: 2px;
  background: #1E2428;
  padding: 10px 15px;
  font-size: 14px;
  color: #B0B5B9;
  border: 0px;
  margin-right: 10px;
  width: 100%;
}
#optinbar input:focus {
  outline: none;
}
#optinbar input::-webkit-input-placeholder {
  color: #BBBDBC;
  font-weight: normal;
}
#optinbar button {
  width: 100%;
  background: none;
  border: 2px solid #282D2F;
  color: #A1A1A1;
  border-radius: 2px;
  padding: 8px 14px;
  transition: background 0.4s ease-in-out, color 0.4s ease-in-out;
}
#optinbar button:hover {
  background: #282D2F;
  color: #fff;
}
/********** END HOME OPTINBAR **********/
.btn-primary:hover,
.btn-primary:active {
  background: #a8db10;
  border-color: #a8db10;
}
.user h2 {
  margin: 20px;
  text-align: center;
  padding-top: 20px;
  margin-bottom: 0px;
}
#user-badge {
  background: #f9f9f9;
  width: 100%;
  height: 150px;
  margin-top: 40px;
  margin-bottom: 20px;
  position: relative;
}
#user-badge h2 {
  display: block;
  text-align: left;
  padding-top: 15px;
  margin-bottom: 10px;
}
#user-badge img {
  width: 150px;
  height: 150px;
  float: left;
  margin-right: 15px;
}
#user-badge .btn-info {
  float: right;
  top: 0px;
  position: absolute;
  top: 20px;
  right: 20px;
}
#user-badge p.member-since {
  margin-top: 10px;
  font-size: 12px;
  color: #999;
}
#user-badge label {
  padding: 15px;
}
#user-badge input[type="file"] {
  margin-left: 160px;
  width: auto;
}
#user-badge input[type="submit"] {
  float: right;
  margin-bottom: 20px;
}
.sectionHeader {
  background: #2D3037;
  color: #aaa;
  padding-top: 2px;
  margin-bottom: 25px;
  font-size: 12px;
}
.sectionHeader .copy {
  float: left;
  padding-left: 20px;
}
.sectionHeader .copy h1 {
  color: #ccc;
  font-weight: 400;
  margin-bottom: 4px;
  margin-top: 18px;
  font-size: 14px;
  font-weight: bold;
}
.sectionHeader i {
  float: left;
  font-size: 38px;
  margin-top: 7px;
  line-height: 65px;
  color: #ddd;
}
ul.invoices {
  margin-left: 0px;
  padding-left: 0px;
}
ul.invoices li {
  border: 1px solid #f1f1f1;
  padding: 10px;
  margin-left: 0px;
  list-style: none;
}
ul.invoices li span.date {
  float: left;
  display: block;
}
ul.invoices li span.amount {
  float: right;
  display: block;
  color: #1AB233;
}
.cancel-account-confirmation {
  display: none;
}
.well {
  box-shadow: 0px 0px 0px;
  border-radius: 3px;
  background: none;
  border: 0px solid #ddd;
  background: #f9f9f9;
}
.well label {
  color: #5C5F51;
}
/********** SINGLE VIDEO PAGE **********/
/*#video_container{
  width:900px;
  height:506px;
  margin:0px auto;
}*/
#video_container {
  position: relative;
  padding-bottom: 59%;
  padding-top: 0px;
  height: 0;
  overflow: hidden;
}
#video_left {
  background: #ffffff;
  margin-top: 30px;
  margin-bottom: 30px;
}
#video_sidebar h3 {
  color: #434351;
  font-size: 12px;
  margin-bottom: 20px;
  padding-top: 0px;
  border-bottom: 1px solid #eee;
  padding-bottom: 15px;
}
#video_sidebar h2 {
  font-size: 13px;
  margin-top: 0px;
  margin-bottom: 0px;
}
#video_sidebar h2 a {
  color: #212129;
}
#video_sidebar h2 a:hover {
  color: #25252C;
}
#video_sidebar .row {
  margin-bottom: 15px;
}
#video_sidebar .row .col-md-6:nth-child(2),
#video_sidebar .row .col-sm-6:nth-child(2),
#video_sidebar .row .col-xs-12:nth-child(2) {
  padding-left: 0px;
}
#video_right {
  background: #f9f9f9;
  padding: 20px;
  margin-top: 30px;
}
#left_content {
  padding: 20px;
  padding-top: 0px;
}
#left_content pre {
  left: -20px;
  position: relative;
  border-radius: 0px;
  margin-right: -40px;
  word-wrap: normal;
}
#left_content h3 {
  border-bottom: 1px solid #f1f1f1;
  margin-bottom: 15px;
  padding-bottom: 20px;
  padding-top: 20px;
  font-size: 18px;
  color: #585865;
}
#left_content h3.video_title {
  padding-top: 0px;
}
/*Download and install fitvid...*/
#video_container iframe,
#video_container object,
#video_container embed {
  border: 0px;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  margin-bottom: 20px;
  z-index: 99;
}
#video_bg {
  width: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
  background-position: center center;
  padding: 25px 0px;
  position: absolute;
  height: 100%;
  max-height: 720px;
}
#video_bg_overlay {
  /* IE9 SVG, needs conditional override of 'filter' to 'none' */
  background: #f1f1f1;
  background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmMWYxZjEiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
  background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #f1f1f1 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(100%, #f1f1f1));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #f1f1f1 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #f1f1f1 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #f1f1f1 100%);
  /* IE10+ */
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, #f1f1f1 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff', endColorstr='#f1f1f1', GradientType=0);
  /* IE6-8 */
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: 0;
}
#video_bg_overlay.darker {
  background: rgba(0, 0, 0, 0.7);
}
.video-details h3 {
  position: relative;
}
.video-details h3 span {
  position: absolute;
  right: 130px;
  top: 5px;
  color: #99999f;
  font-size: 14px;
}
#video_player {
  z-index: 999;
  width: 100%;
  outline: none;
}
h2#tags {
  font-size: 18px;
  padding: 20px 0px;
  padding-bottom: 10px;
}
#subscribers_only {
  position: relative;
  z-index: 2;
  text-align: center;
  min-height: 420px;
  padding-top: 100px;
}
#subscribers_only h2 {
  color: #eee;
  border-bottom: 0px;
  text-align: center;
  padding-bottom: 30px;
  border-bottom: 0px solid #5A626D;
  margin-bottom: 30px;
  display: inline-block;
}
#subscribers_only button {
  padding: 25px 40px;
  font-size: 20px;
  border-radius: 50px;
  border: 0px;
  background: #98cb00;
  color: #fff;
  outline: none;
}
.preview {
  float: right;
}
.modal-header {
  padding-top: 17px;
  padding-bottom: 16px;
}
.modal-backdrop {
  /*background:rgba(0, 255, 255, 1);*/
  z-index: 999997;
}
.modal {
  z-index: 999998;
}
.modal .modal-content {
  height: 100%;
  border-radius: 3px;
  border: 0px;
}
.modal .close i {
  font-size: 24px;
  position: relative;
  top: 6px;
  right: 3px;
}
.modal .close:active,
.modal .close:focus {
  outline: none;
}
.modal-body {
  padding-bottom: 20px;
}
h4.modal-title {
  text-align: center;
  padding-top: 0px;
}
.full_column {
  width: 100%;
}
.dimLights {
  background: rgba(0, 0, 0, 0.8);
  width: 100%;
  height: 100%;
  top: 0px;
  left: 0px;
  position: absolute;
  z-index: 999998;
  display: none;
}
.bringToFront {
  position: relative;
  z-index: 999999;
}
.bgdim {
  background: rgba(0, 0, 0, 0.3);
  width: 100%;
  height: 100%;
  position: absolute;
  display: block;
  top: 0px;
  left: 0px;
}
.rsContent a {
  width: 100%;
  height: 100%;
  position: absolute;
  display: block;
  z-index: 100;
  text-align: center;
}
.rsContent a img {
  opacity: 0;
  width: 150px;
  height: 150px;
  margin: 0px auto;
  margin-top: 165px;
  -webkit-transition: all 0.5s;
}
.rsContent a:hover img {
  opacity: 1;
  -webkit-transition: all 0.5s;
}
.rsContent .details {
  margin-top: 200px;
  text-shadow: #aaaaaa 0px 0px 1px;
  max-width: 420px;
}
.rsContent .details h1 {
  color: #fff;
  text-shadow: #aaa 0px 0px 1px;
  font-weight: bold;
}
.rsContent .details .headline,
.rsContent .details .description {
  position: relative;
  font-size: 32px;
  font-weight: 500;
  line-height: 36px;
  margin-bottom: 7px;
}
.rsContent .details .headline .shadow,
.rsContent .details .description .shadow {
  position: absolute;
  color: #000;
  padding-left: 1px;
  padding-top: 1px;
}
.rsContent .details .headline .origin,
.rsContent .details .description .origin {
  position: relative;
  color: #fff;
}
.rsContent .details .description {
  font-size: 14px;
  line-height: 24px;
}
#video_title {
  display: block;
  background: #2D3037;
}
#video_title h1 {
  color: #ccc;
  font-size: 14px;
  margin: 18px 0px;
  line-height: 27px;
  font-weight: normal;
  float: left;
}
#video_title span {
  margin: 20px 0px;
  margin-right: 15px;
  float: left;
  font-size: 12px;
}
#video_title #video_options {
  float: left;
  color: #999;
  margin-top: 16px;
  margin-left: 25px;
}
#video_title #video_options.static {
  position: absolute;
  top: 0px;
  right: 20px;
  z-index: 999999;
}
#video_title #video_options .btn {
  background: rgba(0, 0, 0, 0.3);
  border-radius: 2px;
  padding: 5px 15px;
  padding-top: 3px;
  line-height: 20px;
  cursor: pointer;
  border-right: 1px solid #000;
  float: left;
  text-transform: uppercase;
  font-size: 10px;
  font-weight: bold;
}
#video_title #video_options .btn.active {
  color: #fff;
  background: rgba(0, 0, 0, 0.5);
}
#video_title #video_options .btn#movie_mode {
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0px;
}
#video_title #video_options .btn#dim_mode {
  border-top-left-radius: 0px;
  border-bottom-left-radius: 0px;
  border-right: 0px;
}
#video_title #video_options .btn:hover {
  color: #fff;
}
#video_title #video_options i {
  margin-right: 5px;
  font-size: 16px;
  position: relative;
  top: 4px;
}
#disqus_thread {
  margin-top: 20px;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 360px;
  }
}
/********* FAVORITE STYLES **********/
.favorite {
  float: right;
  position: relative;
  top: -5px;
  border: 0px;
}
.favorite i {
  color: #ccc;
}
.favorite:hover {
  background: #E74C3C;
  color: #fff;
}
.favorite:hover i {
  color: #eee;
}
.favorite.active {
  box-shadow: 0 0px 0px #EBEBEB;
  background: #fff;
}
.favorite.active i {
  color: #E74C3C;
}
.favorite.active:hover {
  background: #EBEBEB;
  color: #333;
}
.favorite.active:hover i {
  color: #444;
}
/********* END FAVORITE STYLES **********/
.user-favorites {
  width: 200px;
  border-radius: 40px;
  background: #C0C0C0;
  color: #F1F1F1;
  margin: 0px auto;
  display: block;
  padding: 20px;
  text-align: center;
  font-size: 16px;
  margin-bottom: 30px;
}
.user-favorites:hover {
  color: #fff;
  text-decoration: none;
}
.label {
  padding: 6px 8px;
}
/********* VIDEO/POST BLOCK **********/
.block {
  background: #fff;
  position: relative;
}
.block.list a {
  float: left;
  display: block;
}
.block.list a img {
  max-width: 300px;
}
.block.list .block-contents {
  float: left;
  padding: 12px;
  padding-left: 5px;
  padding-bottom: 0px;
  max-height: 93px;
}
.block.list .block-contents h2 {
  margin-top: 0px;
  padding-top: 0px;
}
.block.list .block-contents h2 a {
  color: #404651;
}
.block.list .block-contents p.date {
  padding-top: 0px;
  margin-top: 0px;
  margin-bottom: 10px;
  font-size: 13px;
  margin-top: 7px;
}
.block.list .block-thumbnail img {
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0px;
}
.block.list .block-thumbnail .thumbnail-overlay {
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0px;
}
.block .block-contents {
  margin-bottom: 20px;
  float: left;
  background: #f9f9f9;
  padding: 15px;
  padding-top: 0px;
  border-bottom-left-radius: 2px;
  border-bottom-right-radius: 2px;
  width: 100%;
}
.block .block-contents p.date {
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
  color: #333;
  display: block;
  float: left;
  font-size: 15px;
  height: 15px;
  padding-top: 1px;
  width: 100%;
  margin: 20px 0px;
  position: relative;
}
.block .block-contents p.date .label {
  float: right;
  position: absolute;
  right: 0px;
  top: -1px;
}
.block .block-contents p.date .label.label-info {
  background: #C0C0C0;
}
.block .block-contents p.date .label.label-success {
  background: #98cb00;
}
.block .block-contents p.desc {
  color: #9a9a9a;
  clear: both;
  font-size: 14px;
  max-height: 40px;
  min-height: 40px;
}
.block a.block-thumbnail:hover span.play-button {
  opacity: 0.9;
  transition: opacity 0.2s linear;
}
.block a.block-thumbnail:hover span.play-button-small {
  opacity: 0.9;
  transition: opacity 0.2s linear;
}
.block a.block-thumbnail:hover .details h2 {
  transition: color 0.2s ease-in;
  color: #fff;
}
.block a.block-thumbnail {
  position: relative;
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
  display: block;
}
.block a.block-thumbnail img {
  width: 100%;
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
}
.block a.block-thumbnail span.play-button {
  background: url(/content/themes/devdojo/assets/img/play-button-large.png);
  width: 80px;
  height: 80px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -40px;
  margin-top: -40px;
  transition: opacity 0.2s linear;
  opacity: 0;
}
.block a.block-thumbnail span.play-button-small {
  background: url(/content/themes/devdojo/assets/img/play-button-small.png);
  width: 40px;
  height: 40px;
  margin-left: -20px;
  margin-top: -20px;
  position: absolute;
  left: 50%;
  top: 50%;
  opacity: 0;
}
.block a.block-thumbnail .thumbnail-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  background: rgba(0, 0, 0, 0.4);
  border-radius: 2px;
  background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.3) 80%, rgba(0, 0, 0, 0.4) 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(50%, rgba(0, 0, 0, 0.1)), color-stop(80%, rgba(0, 0, 0, 0.3)), color-stop(100%, rgba(0, 0, 0, 0.4)));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.3) 80%, rgba(0, 0, 0, 0.4) 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.3) 80%, rgba(0, 0, 0, 0.4) 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.3) 80%, rgba(0, 0, 0, 0.4) 100%);
  /* IE10+ */
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.3) 80%, rgba(0, 0, 0, 0.4) 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#66000000', GradientType=0);
  /* IE6-9 */
  z-index: 1;
}
.block a.block-thumbnail .details {
  position: absolute;
  bottom: 0px;
  left: 0px;
  width: 100%;
  z-index: 2;
}
.block a.block-thumbnail .details h2 {
  float: left;
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
  cursor: auto;
  display: inline;
  font-size: 12px;
  font-weight: bold;
  height: auto;
  letter-spacing: -0.5px;
  line-height: 25px;
  text-align: left;
  text-decoration: none;
  width: auto;
  padding: 0px 15px;
  position: absolute;
  bottom: -3px;
  max-height: 25px;
  overflow: hidden;
  color: #ddd;
  max-width: 85%;
}
.block a.block-thumbnail .details span {
  float: right;
  color: #fff;
  font-size: 10px;
  margin-right: 15px;
  top: -10px;
  position: relative;
}
.signup-sidebar {
  background: #e74c3c;
  height: 335px;
  position: relative;
  border-radius: 2px;
  cursor: pointer;
  overflow: hidden;
}
.signup-sidebar img {
  width: 80%;
  margin: 0px auto;
  left: 10%;
  bottom: 0px;
  position: absolute;
}
.signup-sidebar h2 {
  padding: 0px;
  margin: 0px;
  font-weight: bold;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  padding: 20px;
  background-color: rgba(0, 0, 0, 0.1);
  margin-bottom: 27px;
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
}
.signup-sidebar a {
  border: 0px;
  border-radius: 2px;
  background: #DB1D1B;
  width: 200px;
  color: #fff;
  padding: 10px;
  margin: 0px auto;
  display: block;
  text-align: center;
}
.signup-sidebar a:hover {
  text-decoration: none;
}
.signup-sidebar a:active,
.signup-sidebar a:focus {
  outline: none;
}
form input[type="submit"] {
  float: right;
}
form {
  margin-bottom: 20px;
}
#comments {
  padding: 20px;
  padding-top: 0px;
  margin-bottom: 20px;
}
/********* Home slider **********/
.royalSlider {
  width: 100% !important;
  height: 480px !important;
  margin-bottom: 25px;
}
.pgwSlider .ps-current img,
ul.pgwSlider > li img,
.pgwSlider > ul > li img,
ul.pgwSlider > li,
.pgwSlider > .ps-list > li {
  border-radius: 2px;
}
.pgwSlider .ps-caption {
  display: none !important;
}
.pgwSlider .ps-current {
  overflow: hidden;
  border-radius: 2px;
  width: 78% !important;
}
/********* Footer pagination *********/
.pagination_container {
  padding-bottom: 20px;
  text-align: center;
  width: 100%;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  background-color: #2D3037;
  border-color: #2D3037;
}
.pagination > li > a,
.pagination > li > span,
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  color: #2D3037;
  border-color: #eaeaea;
}
footer,
.home footer {
  position: relative;
  height: auto;
  width: 100%;
  background: #fff;
  border-top: 0px solid #efefef;
}
footer .logo,
.home footer .logo {
  padding-top: 46px;
  display: block;
}
footer .logo img,
.home footer .logo img {
  width: 100%;
  max-width: 200px;
}
footer h3,
.home footer h3 {
  color: #999;
  text-align: left;
  border-bottom: 0px;
  font-size: 34px;
  margin-top: 20px;
  margin-bottom: 10px;
  padding-top: 30px;
}
footer hr,
.home footer hr {
  margin-top: 50px;
  border-color: #f5f5f5;
}
footer p,
.home footer p {
  color: #999;
}
footer h4,
.home footer h4 {
  color: #ababab;
  margin: 0px;
  margin-top: 56px;
  margin-bottom: 38px;
  font-weight: normal;
}
footer .copyright,
.home footer .copyright {
  text-align: center;
  margin-bottom: 0px;
  padding-bottom: 20px;
}
footer ul,
.home footer ul {
  margin-left: 0px;
  padding-left: 5px;
}
footer ul li,
.home footer ul li {
  list-style: none;
}
footer ul li a,
.home footer ul li a {
  padding: 4px 0px;
  display: block;
  color: #98cb00;
}
footer ul li a:hover,
.home footer ul li a:hover {
  color: #a8db10;
}
footer a.social-link,
.home footer a.social-link {
  padding: 10px;
  border-radius: 2px;
  color: #fff;
  background: #343439;
  margin-top: 20px;
  min-width: 40px;
  max-width: 40px;
  min-height: 40px;
  max-height: 40px;
  display: inline-block;
  text-align: center;
  margin-left: 5px;
}
footer a.social-link i,
.home footer a.social-link i {
  font-size: 20px;
}
footer a.social-link.facebook,
.home footer a.social-link.facebook {
  background: #425F9C;
  margin-left: 0px;
}
footer a.social-link.twitter,
.home footer a.social-link.twitter {
  background: #53A8E9;
}
footer a.social-link.google,
.home footer a.social-link.google {
  background: #DD4B39;
}
footer a.social-link.youtube,
.home footer a.social-link.youtube {
  background: #C81524;
}
footer a.social-link:hover,
.home footer a.social-link:hover {
  background: #303641;
}
/********** POST STYLES **********/
.post {
  margin-top: 30px;
  background: #fff;
}
.post p:first-child {
  margin-top: 0px;
}
.post p {
  margin: 20px 0px;
  font-size: 17px;
  line-height: 28px;
}
.post h4 {
  color: #333;
  font-weight: normal;
  padding: 0px;
  margin: 0px;
}
.post h3 {
  margin-bottom: 30px;
  margin-top: 35px;
}
.post ol li {
  margin: 10px 0px;
}
.post .post-img {
  position: relative;
}
.post .post-img h3 {
  position: absolute;
  bottom: 0px;
  padding: 20px 20px;
  left: 20px;
  background: #98cb00;
  color: #fff;
  border-bottom: 0px;
  margin-bottom: 0px;
}
.post .post-img h6 {
  position: absolute;
  bottom: -40px;
  padding: 10px 20px;
  color: #fff;
  margin-bottom: 0px;
  line-height: 20px;
  background: #a8db00;
  left: 20px;
}
.post .post-body {
  background: #fff;
  padding: 20px;
  padding-top: 60px;
  margin-bottom: 0px;
}
.post .post-body pre {
  left: -20px;
  position: relative;
  border-radius: 0px;
  margin-right: -40px;
  word-wrap: normal;
}
.post .post-body .post-guest {
  position: relative;
}
.post .post-body .post-guest .post-guest-content {
  position: relative;
}
.post .post-body .post-guest .post-guest-content .white-fade {
  position: absolute;
  width: 100%;
  bottom: 0px;
  left: 0px;
  background: url('../img/guest-post-fade-bg.png') repeat-x left bottom;
  height: 50px;
}
.post .post-body .post-guest #subscribers_only {
  padding-top: 10px;
  min-height: 180px;
}
.post .post-body .post-guest #subscribers_only h2 {
  font-size: 20px;
  color: #303641;
  margin-bottom: 10px;
}
.post .post-body .post-guest #subscribers_only button {
  padding: 20px 30px;
  font-size: 14px;
  font-weight: bold;
  outline: none;
}
/********** END POST STYLES **********/
/********** PAGE STYLES **********/
.page {
  margin-top: 20px;
}
.page h2 {
  border-bottom: 0px;
  text-align: center;
}
.page a {
  color: #98cb00;
}
.page p {
  margin: 20px 0px;
  text-align: left;
}
.heading-divider {
  border-top: 2px solid #DFE1E1;
  display: block;
  width: 70%;
  height: 1px;
  margin: 40px auto;
}
ul.pages {
  margin-bottom: 50px;
  padding-left: 0px;
}
ul.pages li {
  list-style: none;
}
ul.pages li a {
  color: #DB1D1B;
}
ul.pages li a:hover {
  color: #DB1D1B;
}
/********** END POST STYLES **********/
.navbar-nav > li > a.user-link-desktop {
  padding: 18px;
  padding-bottom: 17px;
  border-radius: 0px;
  margin: 0px;
  margin-right: 1px;
}
.navbar-nav > li > a.user-link-desktop img {
  height: 30px;
  width: 30px;
  margin-right: 10px;
}
.navbar-nav > li > a.user-link-desktop i {
  margin-left: 5px;
}
form.search .form-search input.search-query {
  background: rgba(0, 0, 0, 0.3);
  border: 1px solid #444;
  color: #fff;
  padding-top: 5px;
  padding-bottom: 5px;
  margin-top: 15px;
  margin-right: 15px;
}
form.search .form-search .fa {
  left: 30px;
  position: relative;
  top: 9px;
}
.search-results {
  padding-bottom: 30px;
}
.search-results h4 {
  margin: 0px;
  margin-top: 40px;
  margin-bottom: 10px;
}
.navbar-nav.navbar-left li a i {
  margin-right: 4px;
  font-size: 20px;
  line-height: 20px;
  position: relative;
  top: 5px;
}
.form-control:focus {
  border-color: #98cb00;
  box-shadow: 0px 0px 0px;
}
/********** BILLING FORM **********/
.payment-errors {
  display: none;
}
#signup-form {
  margin-top: 50px;
}
#signup-form.row {
  margin-left: 0px;
  margin-right: 0px;
}
#signup-form p {
  text-align: center;
  margin: 15px auto;
}
#signup-form .panel-heading {
  background: #98cb00;
  color: #fff;
  padding: 50px;
}
#signup-form .panel-heading .panel-title {
  font-size: 22px;
}
#signup-form .cc-icons img {
  max-width: 220px;
  float: right;
}
#signup-form .panel-body {
  padding: 30px;
}
#signup-form label {
  line-height: 35px;
}
#signup-form select {
  margin-top: 8px;
}
.btn-primary {
  background: #98cb00;
  border-color: #98cb00;
}
/********** END BILLING FORM **********/
#signup-form .demo-info p {
  text-align: left;
}
.demo-info {
  margin-top: 20px;
}
.demo-info p.title {
  padding-bottom: 10px;
  font-weight: bold;
  font-size: 18px;
  text-align: left;
}
.demo-info p {
  text-align: left;
}
.demo-info p strong {
  text-decoration: none;
}
/********** SIDEBAR **********/
.post-sidebar {
  padding-left: 0px;
}
#sidebar {
  margin-top: 30px;
  padding: 20px;
  background: #fff;
  padding-bottom: 30px;
}
#sidebar h3 {
  border-bottom: 0px;
}
#sidebar .block {
  margin-bottom: 25px;
}
#sidebar .block h2 {
  max-width: 100%;
  font-size: 13px;
  bottom: -10px;
  left: -5px;
}
#sidebar .block a.block-thumbnail span.play-button {
  background: url(/content/themes/devdojo/assets/img/play-button-small.png);
  width: 40px;
  height: 40px;
  margin-left: -20px;
  margin-top: -20px;
}
#sidebar .block p.category {
  max-height: 18px;
  overflow: hidden;
}
#sidebar .block p.category span {
  float: left;
  margin-right: 0px;
}
#sidebar .block p.category a {
  width: 80%;
  float: left;
  margin-left: 5px;
  font-size: 11px;
  padding-top: 3px;
}
#sidebar .block.list {
  margin-bottom: 15px;
}
#sidebar .block.list .block-contents p.date {
  font-size: 12px;
  margin: 6px 0px;
  margin-top: 8px;
}
#sidebar .block .block-contents {
  margin-bottom: 0px;
  width: 50%;
  padding-top: 5px;
}
#sidebar .block .block-contents h2 {
  font-size: 16px;
  height: 18px;
  overflow: hidden;
  margin-bottom: 0px;
  margin-top: 5px;
}
/********** END SIDEBAR **********/
#social_share {
  padding: 20px;
  padding-top: 0px;
}
#social_share .rrssb-buttons li {
  width: 25%;
}
#social_share p {
  margin-bottom: 8px;
}
.rrssb-buttons li:first-child {
  margin-left: 0px;
  padding-left: 0px;
}
.rrssb-buttons li:last-child {
  margin-right: 0px;
  padding-right: 0px;
}
.video-details-container p {
  margin: 20px 0px;
  font-size: 17px;
  line-height: 30px;
}
/********* End Footer pagination *********/
/*----------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------


    Default Theme Tablet CSS


------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------*/
@media screen and (max-width: 1199px) {
  .signup-sidebar {
    height: 276px;
  }
  .signup-sidebar h2 {
    font-size: 12px;
    margin-bottom: 14px;
  }
}
@media screen and (max-width: 991px) {
  .signup-sidebar {
    display: none;
  }
}
@media screen and (max-width: 1080px) {
  #home-hero h1 {
    font-size: 40px;
  }
}
@media screen and (max-width: 767px) {
  .featured .social {
    display: none;
  }
  #video_options {
    display: none;
  }
  #left_column {
    padding-left: 0px;
  }
  #video_container {
    padding-top: 0px;
  }
  .featured .featured_bottom .notification {
    float: none;
    width: 100%;
  }
  .featured .featured_bottom h1 {
    width: 100%;
    text-align: center;
  }
  .navbar-brand img {
    padding-right: 0px;
    border-right: 0px;
  }
}
/********** Landscape MODE **********/
@media screen and (max-width: 800px) {
  body #home-hero {
    height: 550px;
    max-height: 550px;
  }
  body #home-hero h1 {
    font-size: 30px;
  }
  body #home-hero h4 {
    font-size: 17px;
  }
  body #home-hero #dim-bg {
    height: 550px;
  }
  body #home-content {
    margin-top: 0px;
  }
  #video_container {
    padding-bottom: 60%;
    padding-top: 0px;
  }
  #video_bg {
    padding: 10px 0px;
  }
}
/*
Navbar Toggle
*/
.nav-open .navbar-default {
  height: 100%;
  background: none;
}
.nav-open .navbar-default .navbar-nav.navbar-left li:first-child a,
.nav-open .navbar-default .navbar-nav > li > a {
  color: #fff;
}
.nav-open .navbar-nav.navbar-right li.signup-desktop a i {
  display: none;
}
#nav-toggle {
  position: absolute;
  left: 20px;
  top: 20px;
  display: none;
}
#nav-toggle {
  cursor: pointer;
  padding: 10px 35px 16px 0px;
}
#nav-toggle span,
#nav-toggle span:before,
#nav-toggle span:after {
  cursor: pointer;
  border-radius: 1px;
  height: 3px;
  width: 25px;
  background: #2E353B;
  position: absolute;
  display: block;
  content: '';
}
#nav-toggle span:before {
  top: -8px;
}
#nav-toggle span:after {
  bottom: -8px;
}
#nav-toggle span,
#nav-toggle span:before,
#nav-toggle span:after {
  transition: all 200ms ease-in-out;
}
#nav-toggle.active span {
  background-color: transparent;
}
#nav-toggle.active span:before,
#nav-toggle.active span:after {
  top: 0;
}
#nav-toggle.active span:before {
  transform: rotate(45deg);
}
#nav-toggle.active span:after {
  transform: rotate(-45deg);
}
/*----------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------


    Default Theme Mobile CSS


------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------*/
@media screen and (max-width: 767px) {
  body.nav-open {
    position: absolute;
    width: 100%;
    overflow: hidden;
    margin-left: 235px;
  }
  body #home-hero {
    height: 280px;
    max-height: 280px;
  }
  body #home-hero #dim-bg {
    height: 280px;
  }
  body #home-hero .container.home-titles {
    margin-top: -40px;
  }
  body #home-hero h1 {
    margin-bottom: 30px;
    font-size: 22px;
  }
  body #home-hero h4 {
    margin-bottom: 30px;
    font-size: 13px;
    display: none;
  }
  body #home-hero button {
    padding: 20px 25px;
    font-size: 14px;
  }
  body #nav-toggle {
    display: block;
  }
  body #nav-toggle.active {
    left: 190px;
    z-index: 999;
    position: fixed;
  }
  body .navbar-default .navbar-collapse {
    display: block;
    width: 240px;
    background: #202630;
    box-shadow: inset -10px 0 5px -5px rgba(0, 0, 0, 0.25);
    top: 0px;
    left: 15px;
    position: fixed;
    border-top: 0px;
    height: 100%;
    min-height: 100%;
    display: none;
  }
  body .navbar-default .navbar-nav {
    margin-top: 0px;
    margin-bottom: 0px;
  }
  body .navbar-default .navbar-nav.navbar-left li:first-child a {
    margin-left: 0px;
  }
  body .navbar-default .navbar-nav.navbar-left li a {
    padding-top: 25px;
    padding-bottom: 25px;
    margin-bottom: 0px;
  }
  body .navbar-default .navbar-nav.navbar-nav > .open > a {
    background: rgba(0, 0, 0, 0.1);
  }
  body .navbar-default .navbar-nav.navbar-right {
    width: 240px;
  }
  body .navbar-default .navbar-nav.navbar-right li a.user-link-desktop:hover,
  body .navbar-default .navbar-nav.navbar-right li a.user-link-desktop:active {
    background: rgba(0, 0, 0, 0.1);
  }
  body .navbar-nav.navbar-right li.signup-desktop a {
    border-radius: 0px;
    padding: 20px;
    margin-top: 0px;
  }
  body #home-content {
    margin-top: 0px;
  }
  .home .navbar-nav > li > .dropdown-menu,
  .navbar-nav > li > .dropdown-menu {
    background: rgba(0, 0, 0, 0.2);
    border: 0px;
    color: #fff;
  }
  .home .navbar-nav > li > .dropdown-menu .divider,
  .navbar-nav > li > .dropdown-menu .divider {
    border-color: #090E16;
  }
  .home .navbar-nav > li > .dropdown-menu li a,
  .navbar-nav > li > .dropdown-menu li a {
    color: #ccc;
  }
  .dropdown .dropdown-menu .divider {
    background-color: #494E56;
  }
  .navbar-nav .open .dropdown-menu {
    background: #fff;
  }
  .navbar-nav .open .dropdown-menu {
    background: rgba(0, 0, 0, 0.2);
  }
  .navbar-nav .open .dropdown-menu .divider {
    border-color: #494E56;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #fff;
  }
  .main-nav-row {
    margin-left: 0px;
    margin-right: -30px;
  }
  .second-nav {
    overflow-x: hidden;
  }
  .second-nav .navbar-left {
    display: none;
    width: 100%;
  }
  .second-nav #mobile-subnav {
    display: block;
  }
  .second-nav .navbar-right {
    margin-right: -15px;
    width: 50%;
    float: right;
  }
  .second-nav .navbar-right input {
    width: 170px;
  }
  .second-nav li {
    width: 100%;
  }
  .second-nav.navbar-default .navbar-nav li {
    border: 0px;
  }
  .second-nav.navbar-default .navbar-nav li.dropdown.open a.dropdown-toggle {
    color: #fff;
  }
  .second-nav .dropdown-menu {
    padding: 0px;
    margin: 0px;
    color: #333;
  }
  .second-nav .dropdown-menu a.dropdown-toggle {
    color: #333;
  }
  #video_container {
    padding-bottom: 59%;
    padding-top: 12px;
  }
  #video_bg {
    padding: 10px 0px;
  }
  #sidebar .block.list a img {
    width: 100%;
    border-radius: 0px;
    max-width: 100%;
  }
  #sidebar .block.list a.block-thumbnail .thumbnail-overlay {
    border-radius: 0px;
  }
  #sidebar .block.list .block-contents {
    padding-left: 30px;
  }
  .navbar-brand img {
    width: 140px;
    height: auto;
  }
  .navbar > .container .navbar-brand {
    display: block;
    float: none;
    width: 140px;
    margin: 0px auto;
    margin-top: 5px;
    padding: 0px;
    padding-top: 13px;
  }
}
@media screen and (max-width: 400px) {
  body #home-hero button {
    padding: 18px 22px;
    font-size: 12px;
    max-width: 100%;
  }
  .second-nav .navbar-right form i {
    left: 12px;
    position: relative;
  }
  .second-nav .navbar-right {
    padding-left: 0px;
  }
  h3 {
    font-size: 15px;
  }
  .block .block-contents p.desc {
    font-size: 12px;
    max-height: 15px;
    min-height: 15px;
  }
  .video-details h3 span {
    display: none;
  }
  .favorite {
    margin-top: 15px;
    float: none;
  }
  .video-details h3 {
    padding-bottom: 10px;
  }
  .video-details {
    overflow: hidden;
  }
  .video-details-container {
    overflow-x: scroll;
  }
  #video_container {
    padding-bottom: 62%;
    padding-top: 0px;
  }
  #video_bg {
    padding: 0px;
  }
  .second-nav .navbar-right input {
    width: 110px;
  }
  #signup-form .panel-heading .panel-title {
    margin-bottom: 25px;
  }
}
.col-xs-1,
.col-sm-1,
.col-md-1,
.col-lg-1,
.col-xs-2,
.col-sm-2,
.col-md-2,
.col-lg-2,
.col-xs-3,
.col-sm-3,
.col-md-3,
.col-lg-3,
.col-xs-4,
.col-sm-4,
.col-md-4,
.col-lg-4,
.col-xs-5,
.col-sm-5,
.col-md-5,
.col-lg-5,
.col-xs-6,
.col-sm-6,
.col-md-6,
.col-lg-6,
.col-xs-7,
.col-sm-7,
.col-md-7,
.col-lg-7,
.col-xs-8,
.col-sm-8,
.col-md-8,
.col-lg-8,
.col-xs-9,
.col-sm-9,
.col-md-9,
.col-lg-9,
.col-xs-10,
.col-sm-10,
.col-md-10,
.col-lg-10,
.col-xs-11,
.col-sm-11,
.col-md-11,
.col-lg-11,
.col-xs-12,
.col-sm-12,
.col-md-12,
.col-lg-12 {
  padding-left: 10px;
  padding-right: 10px;
}
</style>