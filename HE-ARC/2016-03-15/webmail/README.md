# Webmail Outlook Web App
## Author: Romain Claret
## Discovery Date: 2016-03-14
## Exploitation Date: 2016-03-15
## Fixing Date:
## Major Flaws: 1
## Minor Flaws: 2

# About
## In Short
An attacker can retrieve credentials from a user and act like nothing happened.
- Major flaw: The origin of the POST method is not verified.
- Minor flaw 1: The user is used to see long URLs with a difficult path to read in the URL bar.
- Minor flaw 2: The user is used to see on different URLs from links in emails.

## Details
In this flaw exploitation, we are showing two types of phishing for the users of the online webmail at HE-Arc.

### Flaws
**First**
- The usurpation of the login forms from the webmail. The attacker asks his victim to connect to http://webmail.he-arc.cf instead of http://webmail.he-arc.ch
  - The extensions are similar, adding this to the fact that the user is used to see tokens in the official URL without understanding, it is easier to not pay attention: http://webmail.he-arc.cf/CookieAuth.dll-GetLogon-curl=Z2F&reason=0&formdir=2.html
- Once the user entered his credentials and validates them, if the credentials were correct, he will be redirected to its webmail, like always, however, his credentials were actually also sent to the attacker email address.

**Second**
- The second is an abuse of the automatically generated links by webmail when reading links in emails. The user is used to see links similar: https://webmail.he-arc.ch/owa/redir.aspx?SURL=xAoYFRrWSqT5rmnflJmHG9Cm1Blh_AbrvjgVmPP_JssMZwXI60zTCGgAdAB0AHAAcwA6AC8ALwB3AHcAdwAuAGwAaQBuAGsAZQBkAGkAbgAuAGMAbwBtAC8AZwByAG8AdQBwAHMALwA4ADEANAA2ADQANgAyAA..&URL=https%3a%2f%2fwww.linkedin.com%2fgroups%2f8146462

- The user no longer checking carefully the links... The attack here is to replace this link by ours: https://webmail.he-arc.cf/owa/redir.php?SURL=xAoYFRrWSqT5rmnflJmHG9Cm1Blh_AbrvjgVmPP_JssMZwXI60zTCGgAdAB0AHAAcwA6AC8ALwB3AHcAdwAuAGwAaQBuAGsAZQBkAGkAbgAuAGMAbwBtAC8AZwByAG8AdQBwAHMALwA4ADEANAA2ADQANgAyAA..&URL=https%3a%2f%2fwww.linkedin.com%2fgroups%2f8146462

- To make is work, the attacker can play an innocent user who copies and pasted a link he received in his mailbox a little bit sooner. Then two options comes:
  - Either he can replace the URL within the hypertext. So we in our example: https://webmail.he-arc.ch/owa/redir.aspx?SURL=xAoYFRrWSqT5rmnflJmHG9Cm1Blh_AbrvjgVmPP_JssMZwXI60zTCGgAdAB0AHAAcwA6AC8ALwB3AHcAdwAuAGwAaQBuAGsAZQBkAGkAbgAuAGMAbwBtAC8AZwByAG8AdQBwAHMALwA4ADEANAA2ADQANgAyAA..&URL=https://webmail.he-arc.cf/owa/redir.php?SURL=xAoYFRrWSqT5rmnflJmHG9Cm1Blh_AbrvjgVmPP_JssMZwXI60zTCGgAdAB0AHAAcwA6AC8ALwB3AHcAdwAuAGwAaQBuAGsAZQBkAGkAbgAuAGMAbwBtAC8AZwByAG8AdQBwAHMALwA4ADEANAA2ADQANgAyAA..&URL=https%3a%2f%2fwww.linkedin.com%2fgroups%2f8146462
  - Or he can just link the link that.
  - For the average user, which is the majority of people in the school, be able to differentiate the links above without looking closely, very closely is pretty difficult.

- Once the user clicked on the link, he is then asked to log in, the user won't necessarily question this (he would think, "it is a bug, again"). Once the information is entered and validated, the link is executed and the user is redirected as it should.

- In our case, the password is not sent to the attacker email for ethical reasons, however, it has been tested and it's functional. (It is commented in the code, just replace username with password.)

- Moreover, the malicious code can be also obfuscated. (It was tested but not kept for the academic purposes.) https://javascriptobfuscator.com/Javascript-Obfuscator.aspx

### Differences:
- The phishing site has no certificate
- No extensions in aspx
- Automatic password completion does not work

### The risks highlighted here:
- It is difficult for an inexperienced user to not get caught when the extensions are quite similar.
- Links of links within the webmail are sensibilizing the users.

### The surprises
- We were extremely surprised that there is no Origin check in the POST method from the webmail of he-arc.
- It was not difficult to find a free domain name close to our target: .cf for .ch

### The anonymity of the attacker:
- A private VPN was used (paid) which does not log the traffic. A public network would be able to also be an option.
- For all our signups, we used http://www.yopmail.com/en/
- The email with credentials received by the attacker is sent to an address of YopMail but towards its alias.
  - The alias is: alt.np-cg5r0f7

### Improvements:
- Manage login errors directly from the phishing page.
- Add a certificate. However, it's not necessarily that it is close to our target (HE-Arc). It's just for the small padlock and an SSL connection. Users don't read them anyway.
- But we do not expect to have to make any improvements expecting the IT department to make the necessary changes.
