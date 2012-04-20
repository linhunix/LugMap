<?php
/*
  Copyright (C) 2010-2012  Italian Linux Society - http://www.linux.it

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU Affero General Public License as
  published by the Free Software Foundation, either version 3 of the
  License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU Affero General Public License for more details.

  You should have received a copy of the GNU Affero General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.*/
?>
<?php

require_once ('funzioni.php');
lugheader ('LugMap');

?>

<table id="introTabel" cellspacing="0" cellpadding="0">
  <tr>
    <td style="width: 35%;">
      <div>
        Il progetto <b>LugMap</b> ha l'ambizione di offrire un elenco, quanto
        pi&ugrave; aggiornato, delle realt&agrave; che ruotano attorno al perno del
        <a class="generalink" href="http://www.gnu.org/philosophy/free-sw.it.html">Software Libero</a>, come
        <a class="generalink" href="http://it.wikipedia.org/wiki/Linux_User_Group">Linux Users Group</a>,
        <a class="generalink" href="http://it.wikipedia.org/wiki/Hacklab">Hacklab</a> et similia.
        <br />
        Le voci, ordinate per regione e provincia, sono accessibili direttamente dalla cartina e
        dall'elenco a lato, anche in versione
        <a class="generalink" href="http://lugmap.it/">georeferenziata</a>.
      </div>

      <div>
        Il comun denominatore dei gruppi riportati &egrave; la diffusione di
        <a class="generalink" href="http://it.wikipedia.org/wiki/Linux">Linux</a>
        quale punta di diamante del
        <a class="generalink" href="http://www.gnu.org/philosophy/free-sw.it.html">Software Libero</a>.
        <br />
        Questi sono quindi a disposizione di chiunque voglia avvicinarsi a dette tematiche, sia in forma
        telematica (siti Internet, mailing list, email, ecc.), sia de visu (sedi o birrerie che siano).
      </div>

      <br />

      <div>
        Sono disponibili
        <a class="generalink" href="/regione.php">l'elenco completo di tutti i LUG</a>
        ordinati per provincia, una pagina dedicata alle
        <a class="generalink" href="/statistiche.php">statistiche</a>, ed un
        <a class="generalink" href="/lug-o-matic/">widget web</a> utilizzabile su siti esterni.
      </div>
    </td>

    <td style="width: 50%;" align="center">
	<script src="js/raphael-min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">

	window.onload = function () {
		var R = Raphael("paper", 350, 400);
		var attr = {
			fill: "#ffa200",
			stroke: "#fff",
			"stroke-width": 1,
			"stroke-linejoin": "round"
		};

		var ita = {};

		ita.basilicata = R.path("m 255.33046,234.2801 c -17.03102,2.4697 -10.50285,21.5498 -2.96978,29.0026 -7.81434,22.1981 36.31617,5.0472 24.2478,-11.6132 -6.47989,-6.4485 -16.19318,-7.3276 -21.27802,-17.3894 z").attr(attr);
		ita.trentino_alto_adige = R.path("m 162.10744,23.2837 c -10.86451,4.555 -27.93798,4.5246 -34.24471,10.7018 -9.69534,-7.746 -16.99051,11.212 -5.85,14.2673 -4.14327,7.2175 -7.97766,27.1858 6.35107,22.3229 2.61246,13.272 12.73446,-10.4879 21.02335,-8.8391 8.92327,-4.6001 -4.09074,-20.5387 11.24789,-21.7822 17.89178,2.9016 -7.98187,-12.2234 1.4724,-16.6707 z").attr(attr);
		ita.lombardia = R.path("m 111.79494,40.5199 c -8.90804,0.5389 1.68637,22.7354 -7.29613,10.0306 -10.17189,8.8461 -17.11546,-13.4099 -18.90931,4.3536 -4.54489,8.5795 -4.83099,20.527 -10.86925,6.4459 -12.11682,6.0791 7.87186,29.9237 -7.33335,29.206 2.39036,10.3368 16.82141,10.4553 19.26933,20.7701 -2.22612,-23.5562 23.46903,-13.1848 35.52823,-8.386 6.09923,0.1445 25.96805,-0.7686 9.6485,-7.4358 -14.06324,-4.7946 -8.45766,-22.5431 -8.83106,-24.4196 -15.01014,-2.1631 7.69468,-25.22 -11.20696,-30.5648 z").attr(attr);
		ita.piemonte = R.path("M 65.62684,46.9209 C 49.077227,57.6738 59.263302,85.431 34.733721,83.4656 c -0.59896,8.4664 -22.636955,14.04 -6.870353,21.6976 0.408977,11.7726 -1.332397,30.2576 17.435042,26.0489 13.907351,0.936 13.656298,-18.2386 29.83964,-14.726 8.02198,-2.5612 12.48146,-4.1166 4.61825,-13.0116 C 71.36622,100.5586 59.986263,87.9496 75.86494,86.0558 66.37306,74.5731 72.78945,59.413 65.62684,46.9209 z").attr(attr);
		ita.valle_daosta = R.path("M 43.166216,64.2976 C 32.058274,65.7427 16.932549,76.9528 34.732552,82.4108 48.431282,83.6903 61.443625,69.1342 43.166216,64.2976 z").attr(attr);
		ita.emilia_romagna = R.path("m 102.39975,95.1875 c -11.58941,0.6158 -17.12145,8.3513 -16.00059,18.7899 6.41538,6.3969 10.08194,8.8451 18.36305,5.8778 10.87409,11.8937 26.56261,12.6392 40.22166,10.0868 5.54789,4.9105 5.77571,21.4029 16.31281,9.8445 4.56268,-9.1274 18.19027,7.1663 9.95428,-7.3528 -13.89897,-8.5598 0.0498,-36.85 -23.11181,-29.5852 -15.09861,-0.6183 -33.4977,3.8208 -45.7394,-7.661 z").attr(attr);
		ita.liguria = R.path("m 79.05229,112.7223 c -8.97863,7.1457 -24.124072,7.7819 -27.762631,18.6487 -12.735107,4.3189 -7.091292,18.248 3.655198,8.4019 8.983843,-13.6651 23.500273,-26.6014 38.654683,-11.7686 7.18928,8.6922 18.21774,3.9897 5.0029,-2.6243 -7.00972,-8.8281 -9.24728,-8.2102 -19.55015,-12.6577 z").attr(attr);
		ita.toscana = R.path("m 103.28659,118.7984 c -9.83304,10.9737 16.05079,19.2038 11.13009,33.5681 5.02959,12.6818 4.5364,22.4723 17.41138,29.1893 -0.42811,10.3303 11.29282,14.0661 14.19841,3.4796 7.04426,-9.1023 9.77384,-20.3988 14.12422,-26.7927 -6.92633,-4.1298 11.89988,-17.7617 -2.80411,-13.456 -13.51025,-1.3957 -6.31512,-22.3956 -22.46253,-13.171 -11.78581,3.1159 -23.43072,-5.194 -31.59746,-12.8173 z m 30.52116,66.3897 0.0258,0.1746 -0.0258,-0.1746 z m -32.65483,-17.3592 c -3.59851,2.4261 2.50903,2.8682 0,0 z m 15.01473,7.3142 c -9.91671,1.5846 -5.9216,7.1404 0.35662,3.659 0.62788,-1.0531 0.8448,-2.8711 -0.35662,-3.659 z m -8.3942,8.3767 c -3.25185,1.6778 2.38944,2.7497 0,0 z m 20.35329,8.122 c -2.30264,2.4513 3.65888,2.2284 0,0 z m -14.53179,0.9571 c -3.39557,1.7286 3.02783,1.8801 0,0 z").attr(attr);
		ita.veneto = R.path("m 168.18358,38.7725 c -11.47114,0.7783 -19.39428,8.9106 -14.41137,20.3011 -8.04935,4.6674 -18.98536,9.2312 -22.51141,17.5616 -11.42901,-13.6584 -12.32148,18.5197 2.0877,19.1758 8.26558,11.1708 28.3223,3.8424 35.02677,9.6088 -2.07461,-4.9138 -4.13168,-26.8583 -4.51259,-13.5906 -8.1305,-6.1883 10.98355,-15.1035 4.8386,-7.9454 14.14882,-0.6301 17.90558,-18.0782 0.82616,-14.4828 -6.51491,-10.9576 -2.40955,-21.3058 5.55723,-28.5965 -1.94904,-1.61 -4.55351,-1.6433 -6.90109,-2.032 z").attr(attr);
		ita.friuli_venezia_giulia = R.path("m 175.88411,39.9842 c -6.86454,8.1811 -13.73321,20.5217 -5.47026,28.9323 11.30109,-4.8417 11.4062,12.5238 18.2963,3.1971 5.11739,0.5056 21.10412,12.1308 11.22115,-1.742 -11.18543,-5.6952 3.68808,-12.8547 -8.08839,-17.3711 7.81192,-5.0531 10.12218,-10.9238 -2.13947,-10.2297 -4.56343,-0.7319 -9.89924,0.1155 -13.81933,-2.7866 z m 11.06349,34.0334 c -1.49132,1.7336 3.30859,-0.8798 0,0 z m 2.95026,0.4039 c -1.43185,1.0615 1.87857,0.5658 0,0 z").attr(attr);
		ita.marche = R.path("m 176.19143,136.7634 c -1.37137,8.4039 -21.26538,-2.3285 -14.31473,6.4381 7.0988,2.2791 -4.89513,8.7052 6.86662,9.8413 12.80433,4.0395 7.09331,20.872 20.33116,25.1408 7.22668,6.1005 22.0568,-10.7631 11.35859,-19.5457 -3.1931,-11.5664 -16.39624,-14.4637 -24.24164,-21.8745 z").attr(attr);
		ita.umbria = R.path("m 165.14551,149.6971 c -12.50665,2.6436 2.18688,13.7477 -9.03092,15.2634 -7.79797,13.3233 6.72353,20.2619 14.86819,26.4421 8.07229,-6.0304 22.4577,-15.1836 8.43642,-21.0371 1.26598,-11.1243 -11.31782,-15.1263 -14.27369,-20.6684 z").attr(attr);
		ita.abruzzo = R.path("m 206.68612,215.9287 c 11.48627,-12.8621 13.82475,-0.6206 16.93897,-6.4088 7.46283,-14.7109 -17.37424,-21.6698 -20.38645,-33.866 -12.70939,2.31 -21.50216,13.9628 -13.417,24.6556 -18.0962,2.096 14.78804,14.1078 16.86448,15.6192").attr(attr);
		ita.lazio = R.path("m 152.82641,176.5217 c -2.89231,7.2458 -15.42882,16.4063 -2.12453,23.2373 12.39478,10.9109 22.82087,31.2309 40.84267,30.7505 16.2352,3.3025 21.57181,-19.1752 3.11963,-19.2386 -7.79867,-3.3942 -16.94842,-10.3801 -4.11922,-12.9878 -9.00659,-5.0426 -4.50824,-12.1865 -0.88148,-16.9453 -9.50025,-2.2183 -21.35602,21.0554 -27.79068,2.864 -3.14398,-2.4831 -8.99137,-2.2459 -9.04639,-7.6801 z m 28.72993,64.177 c -3.90043,1.2331 1.49997,2.9843 0,0 z").attr(attr);
		ita.puglia = R.path("m 258.41243,206.358 c -15.55161,-2.7886 -35.56138,10.407 -19.54093,24.835 7.48638,7.4705 21.54225,1.2614 27.37003,13.4798 11.98265,1.3983 8.4357,16.1685 21.67843,11.8146 9.72344,4.8638 21.86352,8.3108 25.75039,20.1371 16.33431,-1.0795 2.05861,-25.6755 -8.75073,-27.5715 -13.54676,-13.5737 -38.459,-15.6298 -49.24103,-29.1854 2.45891,-4.334 13.06089,-10.6616 2.73384,-13.5096 z").attr(attr);
		ita.campania = R.path("m 210.90092,221.9083 c -10.74579,3.1672 -9.28709,24.5577 6.31479,24.9115 -2.05394,11.6849 16.36722,-2.7789 14.09442,12.1156 -1.01012,21.4952 34.86123,8.7972 14.5869,-4.8224 -9.26887,-7.3754 6.76436,-17.192 -5.62627,-19.8262 -7.86998,-20.2696 -16.15777,-1.8629 -29.36984,-12.3785 z m -3.35417,24.3572 c -3.43347,1.9363 2.39434,0.6372 0,0 z m -3.30148,0.36 c -2.5748,4.9615 5.83426,-0.2886 0,0 z m 9.93079,6.5854 c -3.6768,-1.3038 -1.01904,3.0077 0,0 z").attr(attr);
		ita.calabria = R.path("m 272.91789,266.8647 c -5.41653,13.446 -25.28609,-1.1595 -19.04546,15.613 4.47111,11.9833 15.13078,28.3293 0.95284,36.0988 1.31958,8.1582 -13.80466,21.6256 2.23855,20.7487 16.72088,-5.99 12.13231,-34.0559 29.6989,-33.7788 9.75236,-16.7309 -21.4739,-19.7085 -13.50974,-31.9167 1.02163,-1.8826 3.10114,-5.827 -0.33509,-6.765 z").attr(attr);
		ita.sicilia = R.path("m 165.385,337.5462 c -2.23526,0.1161 0.82371,-2.0957 0,0 z m -0.67358,1.5921 c -10.42722,-3.282 4.29229,2.8717 0,0 z m -6.64391,-1.8064 c -0.18882,1.8355 -0.13157,1.279 0,0 z m -1.13283,37.0773 c -6.87797,0.4703 4.8058,5.4217 0,0 z m 14.54312,41.2412 c -5.32764,-1.039 3.18889,1.4986 0,0 z m 7.25624,-11.0528 c -2.48532,-0.3247 1.40534,1.8603 0,0 z m 59.58458,-93.6698 c -3.99438,1.3307 2.91491,1.2982 0,0 z m -3.85362,5.3691 c -1.70054,0.2053 0.96115,1.2706 0,0 z m -5.1526,1.9052 c -4.90948,-0.8541 1.60608,3.8776 0,0 z m 1.55877,2.1216 c -2.59238,3.7839 3.67284,0.8191 0,0 z m 0.99588,3.5939 -0.0825,0.5176 0.0825,-0.5176 z m -45.47873,-10.2527 c 1.0954,1.6234 0.90778,1.3454 0,0 z m 45.80316,18.554 c -14.83507,3.7578 -32.8806,8.3505 -44.86946,-0.8657 -7.10005,8.2744 -18.88469,-4.394 -18.97714,10.9814 9.45124,14.3045 29.5726,16.8284 44.29698,25.7809 7.81013,7.6658 25.18168,18.8413 26.4027,0.434 -6.23878,-14.1894 -1.68653,-25.9611 7.96975,-37.458 -1.77475,-11.9279 -10.29857,5.2857 -14.88407,1.0049 m -10.22611,-13.5328 c -2.54748,-0.6223 2.0534,2.0219 0.15309,-0.031 m -5.41922,0.9185 c -1.34605,-0.7208 0.32176,1.4675 0,0 z").attr(attr);
		ita.sardegna = R.path("m 91.01524,229.2878 c -3.69261,2.3548 2.23224,2.9002 0,0 z m -5.01369,0.5532 c -5.27638,9.9645 -19.51598,14.8237 -26.807211,14.3641 4.489891,14.7506 11.810411,28.4607 6.789151,44.394 -6.114257,13.0618 9.97904,28.9483 17.24925,10.6977 6.51302,-4.155 12.56184,5.7969 12.86968,-6.812 -0.36042,-18.5188 7.71551,-38.686 -1.83472,-55.5947 -1.74875,-3.8302 -6.81212,-3.9989 -8.26615,-7.0491 z m 6.20784,0.36 c -3.21683,2.9236 2.67124,2.2096 0,0 z m -29.36212,4.3727 c -4.521564,0.9755 -0.59143,9.0047 0,0 z m 33.96314,3.6351 c -1.83375,1.2834 2.31397,0.9118 0,0 z m 2.11611,2.8186 c -3.64386,0.2862 0.9682,2.4246 0,0 z m -36.43049,57.5477 c -5.250943,0.7893 3.20207,4.9481 0,0 z m 1.95806,2.3003 c -3.202553,7.299 6.39446,2.9834 0,0 z").attr(attr);
		ita.molise = R.path("m 216.65203,223.6029 c 17.24042,11.7063 26.53055,-30.6406 8.46456,-16.4484 -4.77044,10.9615 -13.46232,-6.7485 -14.90188,8.8804 -2.4979,10.3907 -4.61576,13.6787 -2.69836,1.0531 -0.9795,17.9471 2.48734,-1.4213 9.13568,6.5149 z").attr(attr);
		ita.sardegna = R.path("m 91.01524,229.2878 c -3.69261,2.3548 2.23224,2.9002 0,0 z m -5.01369,0.5532 c -5.27638,9.9645 -19.51598,14.8237 -26.807211,14.3641 4.489891,14.7506 11.810411,28.4607 6.789151,44.394 -6.114257,13.0618 9.97904,28.9483 17.24925,10.6977 6.51302,-4.155 12.56184,5.7969 12.86968,-6.812 -0.36042,-18.5188 7.71551,-38.686 -1.83472,-55.5947 -1.74875,-3.8302 -6.81212,-3.9989 -8.26615,-7.0491 z m 6.20784,0.36 c -3.21683,2.9236 2.67124,2.2096 0,0 z m -29.36212,4.3727 c -4.521564,0.9755 -0.59143,9.0047 0,0 z m 33.96314,3.6351 c -1.83375,1.2834 2.31397,0.9118 0,0 z m 2.11611,2.8186 c -3.64386,0.2862 0.9682,2.4246 0,0 z m -36.43049,57.5477 c -5.250943,0.7893 3.20207,4.9481 0,0 z m 1.95806,2.3003 c -3.202553,7.299 6.39446,2.9834 0,0 z").attr(attr);
		ita.sardegna = R.path("m 91.01524,229.2878 c -3.69261,2.3548 2.23224,2.9002 0,0 z m -5.01369,0.5532 c -5.27638,9.9645 -19.51598,14.8237 -26.807211,14.3641 4.489891,14.7506 11.810411,28.4607 6.789151,44.394 -6.114257,13.0618 9.97904,28.9483 17.24925,10.6977 6.51302,-4.155 12.56184,5.7969 12.86968,-6.812 -0.36042,-18.5188 7.71551,-38.686 -1.83472,-55.5947 -1.74875,-3.8302 -6.81212,-3.9989 -8.26615,-7.0491 z m 6.20784,0.36 c -3.21683,2.9236 2.67124,2.2096 0,0 z m -29.36212,4.3727 c -4.521564,0.9755 -0.59143,9.0047 0,0 z m 33.96314,3.6351 c -1.83375,1.2834 2.31397,0.9118 0,0 z m 2.11611,2.8186 c -3.64386,0.2862 0.9682,2.4246 0,0 z m -36.43049,57.5477 c -5.250943,0.7893 3.20207,4.9481 0,0 z m 1.95806,2.3003 c -3.202553,7.299 6.39446,2.9834 0,0 z").attr(attr);

		var current = null;
		for (var state in ita) {
			ita[state].color = Raphael.getColor();
			(function (st, state) {
				st[0].style.cursor = "pointer";
				st[0].onmouseover = function () {
					current && ita[current].animate({fill: "#ffa200", stroke: "#fff"}, 500);
					st.animate({fill: "#ffd800", stroke: "#fff"}, 200);
					st.toFront();
					R.safari();
					current = state;
				};
				st[0].onmouseout = function () {
					st.animate({fill: "#ffa200", stroke: "#fff"}, 500);
					st.toFront();
					R.safari();
				};
				st[0].onclick = function () {
					window.location = 'http://lugmap.linux.it/' + state.replace (/_/g, '-');
				};
			})(ita[state], state);
		}
	};
	</script>

	<div id="paper"></div>
    </td>

    <td style="width: 15%;" class="regioni">
      <?php
        foreach ($elenco_regioni as $file => $nome) {
          if ($file == 'Italia') {$nome = 'Gruppi Nazionali';}
          if (in_array($file, array('emilia','friuli','trentino','valle'))) {continue;}
          echo '<a id="' . $file . '" class="generalink" href="/'.$file.'/">' . $nome . '</a><br>';
        }
      ?>
    </td>

  </tr>
</table>

<?php
  lugfooter ();
?>
