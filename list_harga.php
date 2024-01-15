  <?php 
  if (isset($kategori)) {            
  	if ($kategori=='Automotive') {
  		echo '
  		<blockquote class="tr_bq">
  		<ul>
  		<li><b><span style="font-size: x-large;"><span style="color: red;"><i>150K</i></span></span></b></li>
  		</ul>
  		</blockquote>
  		';
  	}elseif ($kategori=='Line Art') {
  		echo '  <blockquote class="tr_bq">
  		<ul>
  		<li><b><span style="font-size: x-large;"><span style="color: red;"><i>30K / Wajah Sampai Pundak</i></span></span></b></li>
  		</ul>
  		</blockquote>
  		<blockquote class="tr_bq">
  		<ul>
  		<li><span style="color: red;"><span style="font-size: x-large;"><i><b>40K / Setengah Badan</b></i></span></span></li>
  		</ul>
  		</blockquote>
  		<blockquote class="tr_bq">
  		<ul>
  		<li><span style="color: red;"><span style="font-size: x-large;"><i><b>60K / Seluruh Badan</b></i></span></span> </li>
  		</ul>
  		</blockquote>';
  	}else{
  		echo '  
  	  		<blockquote class="tr_bq">
  		<ul>
  		<li><b><span style="font-size: x-large;"><span style="color: red;"><i>50K / Wajah Sampai Pundak</i></span></span></b></li>
  		</ul>
  		</blockquote>
  		<blockquote class="tr_bq">
  		<ul>
  		<li><span style="color: red;"><span style="font-size: x-large;"><i><b>70K / Setengah Badan</b></i></span></span></li>
  		</ul>
  		</blockquote>
  		<blockquote class="tr_bq">
  		<ul>
  		<li><span style="color: red;"><span style="font-size: x-large;"><i><b>120K / Seluruh Badan</b></i></span></span> </li>
  		</ul>
  		</blockquote>';
  	}
  }else{
  	echo '  
  	  		<blockquote class="tr_bq">
  		<ul>
  		<li><b><span style="font-size: x-large;"><span style="color: red;"><i>50K / Wajah Sampai Pundak</i></span></span></b></li>
  		</ul>
  		</blockquote>
  		<blockquote class="tr_bq">
  		<ul>
  		<li><span style="color: red;"><span style="font-size: x-large;"><i><b>70K / Setengah Badan</b></i></span></span></li>
  		</ul>
  		</blockquote>
  		<blockquote class="tr_bq">
  		<ul>
  		<li><span style="color: red;"><span style="font-size: x-large;"><i><b>120K / Seluruh Badan</b></i></span></span> </li>
  		</ul>
  		</blockquote>';
  }
  ?>


