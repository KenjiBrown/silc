&nbsp;<br />
<b><big>About SILC</big></b>
<br />&nbsp;<br />
SILC (Secure Internet Live Conferencing) is a protocol which provides
secure conferencing services on the Internet over insecure channel. SILC 
superficially resembles IRC, although they are very different internally.
They both provide conferencing services and have almost the same set of
commands. Other than that, they are nothing alike. The SILC is secure and 
the network model is entirely different compared to IRC.
<br />&nbsp;<br />
SILC provides security services that any other conferencing protocol does
not offer today. The most popular conferencing service, IRC, is entirely
insecure. If you need secure place to talk to some person or to group of
people over the Internet, IRC or any other conferencing service, for that 
matter, cannot be used. Anyone can see the messages and their contents in 
the IRC network. And the most worse case, some is able to change the 
contents of the messages. Also, all the authentication data, such as, 
passwords are sent plaintext in IRC.
<br />&nbsp;<br />
SILC is much more than just about `encrypting the traffic'. That is easy
enough to do with IRC and SSL hybrids, but even then the entire network 
cannot be secured, only part of it. SILC provides security services, such 
as sending private messages entirely secure; no one can see the message 
except you and the real receiver of the message. SILC also provides same 
functionality for channels; no one except those clients joined to the 
channel may see the messages destined to the channel. Communication 
between client and server is also secured with session keys and all 
commands, authentication data (such as passwords etc.) and other traffic 
is entirely secured. The entire network, and all parts of it, is secured. 
We are not aware of any other conferencing protocol providing same 
features at the present time.
<br />&nbsp;<br />
SILC has secure key exchange protocol that is used to create the session
keys for each connection. SILC also provides strong authentication based
on either passwords or public key authentication. All authentication data
is always encrypted in the SILC network. Each connection has their own
session keys, all channels have channel specific keys, and all private
messages can be secured with private message specific keys.
<br />&nbsp;<br />

<b>Distribution</b>
<br />&nbsp;<br />
The SILC is distributed currently in three different packages. The SILC 
Client package, the SILC Server package and the SILC Toolkit package. Each 
package has its intended audience.
<br />&nbsp;<br />
- SILC Client package is intended for end users who are looking for a good
and full featured SILC client. The SILC Client package currently includes 
Irssi-SILC client that supports all SILC features, themes and much more. 
It is curses based but has a possibility of adding various other frontends 
to it. The Irssi-SILC client's user interface is based on the Irssi client 
(see <a href="http://irssi.org/" class="normal">Irssi project</a>).
<br />&nbsp;<br />
- SILC Server package is intended for system administrators who would like 
to run their own SILC server or SILC router. The package includes the 
actual server but not the client. If you are running a server and would 
like to connect it to the silc.silcnet.org router you can contact us.
<br />&nbsp;<br />
- SILC Toolkit package is intended for developers and programmers who 
would like to create their own SILC based applications or help in the 
development of the SILC protocol. The actual development of the SILC is 
done in the Toolkit and all the other packages are based on the Toolkit 
releases. The Toolkit includes SILC Protocol Core library, SILC Crypto 
library, SILC Key Exchange (SKE) library, SILC Math library, SILC Modules 
(SIM) library, SILC Utility library, SILC Client library and few other
libraries. It also includes the Irssi-SILC Client, another client as an 
example how to program with the Toolkit and the SILC Server.
<br />&nbsp;<br />

<b>Licensing</b>
<br />&nbsp;<br />
SILC is an Open Source (or Free Software) project and it has been released
under the <a href="?page=copying" class="normal">GNU General Public License</a>. The SILC is free to use and everyone
is allowed to freely redistribute and change the SILC under the terms of the
GNU GPL. While there is no guarantee for the product, SILC is made as secure
as possible. The fact that the software and the protocol is open for public
analysis is a good thing for end user.
<br />&nbsp;<br />
Specification of SILC protocol is available for anyone to look at. There
exist four Internet Drafts that have been submitted to the <a
href="http://www.ietf.org/" class="normal">IETF</a>. See <a
href="?page=docs" class="normal">documentation page</a> for more information.
<br />&nbsp;<br />

<b>Contact</b>
<br />&nbsp;<br />
Feedback and comments are welcome. Bug reports should be sent to the 
development mailing list.
<br />&nbsp;<br />
Development mailing list address: 
<a href="mailto:silc-devel@lists.sourceforge.net" class="normal">
silc-devel@lists.sourceforge.net</a>
