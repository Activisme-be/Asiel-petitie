<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>{{ $this->config->item('email_header') }}</title>
    </head>

    <body>
        <h3>Meneer de Staatssecretaris, Excellentie.</h3>

        <p>Bij het aanvaarden van Uw ambt hebt U een eed gezworen. Daarin zweert U de Grondwet te respecteren. Door die eed ontving U de parlementaire onschendbaarheid waarvan U geniet, en hebt U het recht verworven om Uw ambt uit te oefenen. Die uitoefening van Uw ambt is echter voorwaardelijk. Ze is bepaald door de eed die U hebt afgelegd.</p>
        <p>Uw recente uitspraken over de rechterlijke macht in dit land:</p>
        <p>Hoe rechters de trias politica schenden door Uw beleid te vernietigen en U te dwingen de wet te volgen is op zichzelf zowat de grofste schending van de trias politica die men zich kan inbeelden.</p>
        <p>Het is vanzelfsprekend daardoor een overtreding van Uw eed, want de scheiding der machten is één van de pijlers van onze democratische Grondwet.</p>
        <p>Als onafhankelijke burgers van dit land aanvaarden wij dat niet. En wij verordenen U, uit hoofde van Uw ambtseed, de wet na te leven, zoals deze U door een onafhankelijke rechtbank is opgelegd.</p>
        <p>Het zou U ook sieren indien U zich voor deze volstrekt antidemocratische uithaal naar de onafhankelijkheid van de rechterlijke macht publiek zou verontschuldigen. Dat laatste laten we aan Uw eigen goede manieren over.</p>

        <p>Hoogachtend, {{ $naam }} wonend te, {{ $wonend }}</p>

        <hr>

        <p>
            <small>Email verzonden in opdracht van: {{ $naam }} ({{ $email }}) | {{ $wonend }}</small>
        </p>
    </body>
</html>
