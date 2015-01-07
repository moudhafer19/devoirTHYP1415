<div class="container">

      <div class="starter-template">
        <center><h2> Etudiants Promo THYP1415 </h2></center><br /><br />
		<center><input name="absence" type="button" value="ajouter l'absence" />
		<input name="presence" type="button" value="ajouter la présence" /></center><br />
       <p class="lead"> 
	   
	   <center><table width="50%" border ="1" cellspacing="1" cellpadding="1"><tr><td><br />
		
	<center><div class="container">
        <?php
        
        //charge le flux rss dans un objet PHP
          $xml = simplexml_load_file('http://picasaweb.google.com/data/feed/base/user/107401320610499259896/albumid/6065229773950541889?alt=rss&kind=photo&authkey=Gv1sRgCNak7e60l-7VlgE&hl=fr');
        
        //$xml = simplexml_load_file('http://picasaweb.google.com/data/feed/base/user/107401320610499259896/albumid/6065229773950541889?alt=rss&kind=photo&authkey=Gv1sRgCNak7e60l-7VlgE&hl=fr');
       
        // print_r($xml);       
        foreach ($xml->channel->item as $tof) {
           echo "<div class=organisation>";
                echo "<img src='".$tof->enclosure["url"]."' class=photo alt='".$tof->title."' />";
                echo "<div class =legend>".$tof->title."</div>";
          		echo "</div>"; 
			
        } ?>
		<br />
		</td><tr></table>
	</div>	</center></center>	
   
					
