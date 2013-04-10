<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Off-the-Record Messaging</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Off-the-Record Messaging, Encryption, Authentication, Deniability, Perfect forward secrecy" />
<meta name="description" content="Off-the-Record Messaging" />
<meta name="robots" content="all" />
<link rel="stylesheet" href="main.css" type="text/css" />
</head>

<body>

<div id="title">
<!-- Donate button based on http://openclipart.org/detail/110275/glossy-button-with-3d-frame.-boton-brillante-con-marco-3d-by-ehecatl1138 -->
<a href="donate.php"><img src="baseimg/donate_button.png" align="right"
style="position:absolute; right:50px; top: 8px" /></a>
<h1><a href="index.php" title="Home">Off-the-Record Messaging</a></h1>
</div>

<div id="nav">
<ul>
	<li><a href="news.php">News</a></li>
	<li><a href="index.php#downloads">Downloads</a></li>
	<li><a href="index.php#git">Source Code</a></li>
	<li><a href="index.php#lists">Mailing Lists</a></li>
	<li><a href="index.php#docs">Documentation</a></li>
	<li><a href="index.php#faqs">FAQ</a></li>
	<li><a href="press.php">Press</a></li>
	<li><a href="software.php">Software</a></li>
	<li><a href="people.php">People</a></li>
	<li><a href="donate.php">Donate</a></li>
</ul>
</div>

<div id="software" style="padding: 15px;">
<h2>OTR-Enabled Software</h2>

    <h3>OS Distributions which ship with OTR software</h3>
    <ul>
	<li>Linux
	<ul>
	    <li><a href="http://gentoo-portage.com/x11-plugins/pidgin-otr">Gentoo</a></li>
	    <li>Debian
	    <ul>
		<li><a href="http://packages.debian.org/stable/net/gaim-otr">Debian stable (etch)</a></li>
		<li><a href="http://packages.debian.org/testing/net/pidgin-otr">Debian testing (lenny)</a></li>
		<li><a href="http://packages.debian.org/unstable/net/pidgin-otr">Debian unstable (sid)</a></li>
	    </ul></li>
	    <li>Ubuntu
	    <ul>
	    <li><a href="http://packages.ubuntu.com/dapper/net/gaim-otr">Ubuntu Dapper</a></li>
	    <li><a href="http://packages.ubuntu.com/feisty/net/gaim-otr">Ubuntu Feisty</a></li>
	    <li><a href="http://packages.ubuntu.com/gutsy/net/pidgin-otr">Ubuntu Gutsy</a></li>
	    <li><a href="http://packages.ubuntu.com/hardy/net/pidgin-otr">Ubuntu Hardy</a></li>
	    <li><a href="http://packages.ubuntu.com/intrepid/net/pidgin-otr">Ubuntu Intrepid</a></li>
	    </ul></li>
	    <li><a href="http://www.t2-project.org/packages/pidgin-otr.html">T2</a></li>
	    <li><a href="https://admin.fedoraproject.org/pkgdb/packages/name/pidgin-otr">Fedora, Red Hat Enterprise Linux, CentOS</a></li>
	</ul></li>
	<li>BSD
	<ul>
	    <li><a href="http://www.freebsd.org/cgi/cvsweb.cgi/ports/security/pidgin-otr/">FreeBSD</a></li>
	    <li><a href="ftp://ftp.netbsd.org/pub/NetBSD/packages/pkgsrc/chat/pidgin-otr/README.html">NetBSD</a></li>
	    <li><a href="http://www.openbsd.org/cgi-bin/cvsweb/ports/security/pidgin-otr/">OpenBSD current</a></li>
	    <li><a href="http://www.openbsd.org/4.4_packages/i386/pidgin-otr-3.2.0.tgz-long.html">OpenBSD 4.4</a></li>
	</ul></li>
    </ul>

    <h3>IM clients which support Off-the-Record Messaging "out of the box"</h3>
    <ul>
	<li><a href="http://adiumx.com/">Adium</a></li>
	<li><a href="https://play.google.com/store/apps/details?id=de.shapeservices.impluslite&feature=search_result">IM+</a>, a multi-protocol IM client for Android</li>
	<li><a href="http://www.climm.org/">climm</a></li>
	<li><a href="http://lilotux.net/~mikael/mcabber/">mcabber</a></li>
	<li><a href="http://www.centerim.org/index.php/Main_Page">CenterIM</a></li>
	<li><a href="http://kopete.kde.org/">Kopete</a></li>
	<li><a href="http://modularsystems.sl/">Emerald Viewer</a>, a Second Life Client</li>
	<li><a href="https://guardianproject.info/apps/gibber/">Gibberbot</a>, an XMPP client for Android</li>
	<li><a href="http://jitsi.org/">Jitsi</a></li>
    </ul>
    <h3>Third-party plugins for IM clients</h3>
    <ul>
	<li><a href="http://otr.cypherpunks.ca/">OTR plugin for pidgin</a><span style="color:red"><sup>*</sup></span></li>
	<li><a href="http://addons.miranda-im.org/details.php?action=viewfile&amp;id=2644">OTR plugin for Miranda</a></li>
	<li><a href="http://code.google.com/p/mirotr/">a newer OTR plugin for Miranda</a></li>
	<li><a href="http://trillianotr.kittyfox.net/">OTR plugin for Trillian</a></li>
	<li><a href="http://irssi-otr.tuxfamily.org/">OTR plugin for irssi, xchat, and weechat</a></li>
	<li><a href="https://github.com/mmb/weechat-otr">OTR plugin for weechat</a></li>
	<li><a href="http://public.tfh-berlin.de/~s717689/">OTR plugin for Psi</a><br/>You can also try these links for Psi/Psi+:
	<ul><li><a href="http://public.tfh-berlin.de/~s30935/">OTR Plugin for Psi+</a></li><li><a href="https://launchpad.net/~psi-plus/+archive/ppa">Ubuntu Psi+ with OTR</a><br/>
	<tt>sudo apt-add-repository ppa:psi-plus/ppa</tt><br/>
	<tt>sudo apt-get install psi-plus</tt>
	</li>
	</ul>
	</li>
    </ul>

    <h3>Libraries that support OTR</h3>
    <ul>
	<li><a href="http://otr.cypherpunks.ca/">libotr (a C library)</a><span style="color:red"><sup>*</sup></span></li>
	<li><a href="http://python-otr-old.pentabarf.de/">Python bindings to libotr</a></li>
	<li><a href="https://github.com/afflux/pure-python-otr">A native Python implementation of OTR</a></li>
	<li><a href="http://weinholt.se/industria/industria.html#net-otr">A native Scheme implementation of OTR</a></li>
	<li><a href="https://github.com/arlolra/otr">A native Javascript implementation of OTR</a></li>
	<li><a href="http://go.pkgdoc.org/code.google.com/p/go.crypto/otr">A native Go implementation of OTR</a></li>
    </ul>

<p style="padding-top:4ex"><span style="color:red"><sup>*</sup></span> Software developed by the OTR Development Team</p>
</div>


<div id="footer">
	<div style="float:right; text-align:right">
	<a href="http://validator.w3.org/check?uri=referer"><img
	    src="http://www.w3.org/Icons/valid-xhtml10-blue"
	    alt="Valid XHTML 1.0 Transitional" height="31" width="88" 
	    border="0" /></a><br />
	<span style="font-size:smaller">Website design by Ekrem Erdem</span>
	</div>
	<address>
	<a href="http://www.cs.uwaterloo.ca/~iang/">Ian Goldberg</a> and <a href="people.php">the OTR Development Team</a> [<a href="gpgkey.asc">GPG release signing key</a>]
	</address>
</div>
</body>
</html>
