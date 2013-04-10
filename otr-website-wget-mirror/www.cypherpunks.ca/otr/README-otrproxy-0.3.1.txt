		     Off-the-Record Messaging Proxy
		       version 0.3.1,  2 Nov 2005

This is a localhost AIM proxy which implements Off-the-Record (OTR)
Messaging.  It allows you to use OTR with almost any IM client,
on Linux, OSX, Windows, and other platforms.

*** NOTE ***  This is a really early version of the proxy, and is
	      missing a number of features.  If you use it, please be
	      prepared to give feedback to the otr-users mailing list.
	      You should certainly join that list and the otr-announce
	      list.  See "MAILING LISTS" below for more information
	      about the mailing lists.

OTR allows you to have private conversations over IM by providing:
 - Encryption
   - No one else can read your instant messages.
 - Authentication
   - You are assured the correspondent is who you think it is.
 - Deniability
   - The messages you send do _not_ have digital signatures that are
     checkable by a third party.  Anyone can forge messages after a
     conversation to make them look like they came from you.  However,
     _during_ a conversation, your correspondent is assured the messages
     he sees are authentic and unmodified.
 - Perfect forward secrecy
   - If you lose control of your private keys, no previous conversation
     is compromised.

For more information on Off-the-Record Messaging, see
http://www.cypherpunks.ca/otr/

USAGE

This is a localhost AIM proxy: you run it on your local computer, and
tell your AIM client to connect to it.  [Right now the proxy only
supports the AIM protocol.  ICQ may also work.  Other protocols may come
later.]

There are four common kinds of AIM proxies: SOCKS4, SOCKS5, HTTP, and
HTTPS.  This proxy supports SOCKS5, HTTPS, and HTTP.  [If some software
really needs SOCKS4, we may add it.  Let the otr-users list know if you
have such software.]

** Special note for gaim users: gaim claims to support SOCKS4, SOCKS5,
and HTTP proxies.  But what it calls an HTTP proxy is what everyone else
calls an HTTPS proxy.

** Special note for iChat users: iChat has a bug which makes localhost
proxies not work for SOCKS5 or HTTPS.  So you have to use HTTP.  The bug
has been reported to Apple.

You need to find a proxy method that your AIM client and otrproxy have
in common.  SOCKS5 is best, if that's available in your client.  HTTPS
is second-best.

Run "otrproxy".  It should tell you:

    Off-the-Record Messaging Proxy
    Copyright (C) 2004-2005  Nikita Borisov, Ian Goldberg, Katrina Hanna
			     <otr@cypherpunks.ca>
    Proxy version 0.3.1, using OTR library version 3.0.0

    This program is free software.  See the file COPYING for details.

    OTR Proxy starting.
    Starting HTTP/HTTPS proxy on port 8080
    Starting SOCKS5 proxy on port 1080

Now you need to configure your AIM client to speak to the proxy.  We
can't tell you how to do this, since every client is different.  Set the
proxy host to either "localhost" or "127.0.0.1".  Set the port to 1080
(for the SOCKS5 proxy) or 8080 (for the HTTPS or HTTP proxies).  The
proxy does not currently require a username/password, but that may
change in a future version.

If your client requires you to use a proxy *already* (you're behind a
firewall or something like that), you're unfortuantely out of luck at
this time.  :-(  In the future, otrproxy will be able to be configured
to chain to other proxies.

If your AIM account is currently logged in, you'll have to log out and
back in for the new proxy settings to take effect.

You will see the OTR Proxy window, which lists your currently active
private connections (initially none, of course), as well as a menu to
let you exit the proxy (which will also end any AIM sessions that are
using it), edit preferences, or see the About box.

The preferences panel has two "pages": "Known fingerprints" and "OTR
Preferences".

The "OTR Preferences" page allows you to generate private keys, and to
set OTR options.

    Private keys are used to authenticate you to your buddies.  Choose
    one of your accounts from the menu (only accounts currently logged
    in to AIM using the proxy, and those that already have private keys,
    will be listed), click "Generate" and wait until it's finished.
    You'll see a sequence of letters and number appear above the
    "Generate" button.  This is the "fingerprint" for that account; it
    is unique to that account.  If you have multiple IM accounts, you
    can generate private keys for each one separately.  Note that if you
    don't generate keys in this way, they will be generated
    automatically, when they are needed.

    If you click "Copy fingerprint", the fingerprint will be copied into
    the clipboard, so that you can paste it into other programs.

    The OTR options determine when private messaging is enabled.

    The options are:
    [X] Enable private messaging
      [X] Automatically initiate private messaging
        [ ] Require private messaging

    If the "enable private messaging" box is unchecked, private messages
    will be disabled completely (and the other two boxes will be greyed
    out, as they're irrelevant).

    If the first box is checked, but "automatically initiate private
    messaging" is unchecked, private messaging will be enabled, but only
    if either you or your buddy explicitly requests to start a private
    conversation (and the third box will be greyed out, as it's
    irrelevant).

    If the first two boxes are checked, but "require private messaging"
    is unchecked, OTR will attempt to detect whether your buddy can
    understand OTR private messages, and if so, automatically start a
    private conversation.

    If all three boxes are checked, messages will not be sent to your
    buddy unless you are in a private conversation.

The "Known fingerprints" page allows you to see the fingerprints of any
buddies you have previously communicated with privately.

Now just start using AIM.  To start an OTR private conversation with
someone, type "?OTR?" (without the quotes, but with the question marks
and capital letters).

If your buddy does not have the OTR plugin, a private conversation will
(of course) not be started.  [But he'll get some information about OTR
instead.]

If your buddy does have the OTR plugin (and it's enabled), a private
conversation will be initiated.

If both you and your buddy have OTR software, and your OTR options set
to automatically initiate private messaging, your clients may recognize
each other and automatically start a private conversation.

The first time you have a private conversation with one of your buddies,
his fingerprint will appear, and you will be asked to verify that it is
valid.  It's usually a good idea to make sure it's correct, perhaps via
the phone, or some other authenticated communication.

If it's wrong, it means someone's intercepting your communication.
While unlikely, this is one of the things this plugin detects.

Once you've verified your buddy's fingerprint, it will be stored, and
future private conversations with him won't bother you with this dialog.
[Unless, of course, he uses a different fingerprint, perhaps from a
different IM account, or on a different computer.  It's OK to have
multiple fingerprints for the same IM account, on different machines.]

When private communication has been established, you each will see an
information popup containing:
 - Your buddy's screen name  (he'll see yours, of course)
 - His fingerprint  (similarly, he'll see yours)
 - A "secure id" for the session.  Half of this id will be in bold.
   Your buddy sees the same id, but the other half is in bold for him.

The "secure id" is another way to verify that you're actually chatting
with your buddy, and not some eavesdropper ("man-in-the-middle" is the
technical term).  Phone him up, and ask him to read his bold part, and
read yours back to him.  If they're both correct, you're assured that
there's no one intercepting your private conversation.  This is secure,
even if you know that one or both of your private keys have been
compromised.

Then just use IM with him normally; all your instant messages will be
encrypted and authenticated.  You should see your buddy listed under
"Private Connections" in the OTR Proxy window.

If you open the Preferences panel back up, and go to the "Known
fingerprint" page, you'll see your buddy, and his fingerprint, listed
there.  The "Status" should currently be "Private", which means you're
having a private conversation.  Other possibilities are "Not private",
which means you're just chatting in IM the usual (non-OTR) way, and
"Setting up", which means the private conversation is in the process of
being set up.

By selecting one of your buddies from the list, you'll be able to do one
or more of the following things by clicking the buttons below the list:
 - "Start private conversation": if the status is "Not private", this
   will attempt to start a private conversation.  It's the same as
   typing "?OTR?" to your buddy.
 - "End private conversation": if the status is "Private" (or "Setting
   up"), you can force an end to your private conversation by clicking
   this button.  There's not usually a good reason to do this, though.
   Note that your buddy will have to click the button at his end, as
   well.  [This is so he doesn't inadvertently type a message he thinks
   is private, when suddenly the privacy is removed from him.]  When you
   end a private conversation, you'll see a warning box to that effect.
 - "Forget fingerprint": this will remove your buddy's fingerprint from
   the list.  You'll have to re-verify it the next time you start a
   private conversation with him.  Note that you can't forget a
   fingerprint that's currently in use in a private conversation.

Once again, if you use this proxy, you really should join the
otr-announce and otr-users mailing lists; more information on that is
below.

TODO

- username/password authentication to connect to the proxy
- allow the use of *outgoing* proxies
- SOCKS4 support?  Does anyone need this?

MAILING LISTS

There are three mailing lists pertaining to Off-the-Record Messaging:

otr-announce:
    http://lists.cypherpunks.ca/mailman/listinfo/otr-announce/
    *** All users of OTR software should join this. ***  It is used to
    announce new versions of OTR software, and other important information.

otr-users:
    http://lists.cypherpunks.ca/mailman/listinfo/otr-users/
    Discussion of usage issues related to OTR Messaging software.

otr-dev:
    http://lists.cypherpunks.ca/mailman/listinfo/otr-dev/
    Discussion of OTR Messaging software development.

LICENSE

The Off-the-Record Messaging Proxy is covered by the following (GPL)
license:

    Off-the-Record Messaging Proxy
    Copyright (C) 2004-2005  Nikita Borisov, Ian Goldberg, Katrina Hanna
		             <otr@cypherpunks.ca>

    This program is free software; you can redistribute it and/or modify
    it under the terms of version 2 of the GNU General Public License as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    There is a copy of the GNU General Public License in the COPYING file
    packaged with this plugin; if you cannot find it, write to the Free
    Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA
    02111-1307  USA

CONTACT

To report problems, comments, suggestions, patches, etc., you can email
the authors:

Nikita Borisov, Ian Goldberg, Katrina Hanna <otr@cypherpunks.ca>

For more information on Off-the-Record Messaging, visit
http://www.cypherpunks.ca/otr/
