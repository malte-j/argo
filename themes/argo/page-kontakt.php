<?php
get_header();
?>
<main>
  <header>
    <h1>Jetzt mit uns durchstarten:</h1>
  </header>

  <form action="https://qvlgljtg97.execute-api.eu-central-1.amazonaws.com/main" method="post" class="contact-form">
		<p class="label">Art des Projekts</p>
		<div class="select-column">
			<div class="option">
				<input type="radio" name="type" id="type_website" value="website" checked>
				<label for="type_website">Website</label>
			</div>
			
			<div class="option">
				<input type="radio" name="type" id="type_marketing" value="marketing">
				<label for="type_marketing">Marketing</label>
			</div>
			
			<div class="option">
				<input type="radio" name="type" id="type_workshops" value="workshops">
				<label for="type_workshops">Workshops</label>
			</div>
			
			<div class="option">
				<input type="radio" name="type" id="type_softwareintegration" value="softwareintegration">
				<label for="type_softwareintegration">Softwareintegration</label>
      </div>
</div>
    
		<p class="label">Anzahl der Mitarbeiter</p>
		<div class="select-row">
			<div class="option">
				<input type="radio" name="employees" id="employees_st5" value="<5" checked>
				<label for="employees_st5"> &lt5 </label>
			</div>
				
			<div class="option">
				<input type="radio" name="employees" id="employees_st50" value="<50">
				<label for="employees_st50"> &lt50 </label>
			</div>	
				
			<div class="option">
				<input type="radio" name="employees" id="employees_st100" value="<100">
				<label for="employees_st100"> &lt100 </label>
			</div>
				
				<div class="option">
				<input type="radio" name="employees" id="employees_gt100" value=">100">
				<label for="employees_gt100"> &gt100 </label>
			</div>
		</div>
		
		<label for="company" class="label">Ihre Firma</label>
		<input type="text" name="company" id="company" required placeholder="Musterfirma GmbH">
		
		
		<label for="name" class="label">Ihr Name</label>
		<input type="text" name="name" id="name" required placeholder="Max Mustermann">
				
		<label for="phonenumber" class="label">Ihre Telefonnummer</label>
		<input type="tel" name="phonenumber" id="phonenumber" placeholder="+49151701723">
				
		<label for="email" class="label">Ihre Emailadresse</label>
		<input type="email" name="email" id="email" placeholder="max@example.com">
				
		<label for="info" class="label">Weitere Details</label>
		<textarea name="info" id="info" cols="12" rows="5" placeholder="Außerdem..."></textarea>

		<label for="question" class="label">Was sind 5 + 3?</label>
		<input type="text" name="question" id="question">
			
		<input type="submit" value="Abschicken">

  </form>
	<div class="class">
			<?php
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile;
			?>
		
		</div>	

</main>

<?php get_footer(); ?>

