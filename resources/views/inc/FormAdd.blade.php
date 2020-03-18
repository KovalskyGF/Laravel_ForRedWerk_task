<form action="push.php" method="post">

				<div class="form-group">
   			 	<label for="exampleFormControlInput1">Заголовок</label>
   			 	<input name="title" class="form-control" id="exampleFormControlInput1" placeholder="Название новости">
  			</div>

  			<div class="form-group">
			    <label for="exampleFormControlTextarea1">Описание</label>
			    <textarea class="form-control" name="about" id="exampleFormControlTextarea1" rows="7" placeholder="Описание новости"></textarea>
			  </div>

				<div class="form-group">
   			 	<label for="exampleFormControlInput1">Ваше имя:</label>
   			 	<input name="author" class="form-control" id="exampleFormControlInput1" placeholder="Название новости">
  			</div>

  			<div class="form-group">
   			 	<label for="exampleFormControlInput1">E-mail:</label>
   			 	<input type ="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Название новости">
  			</div>

  			<div class="form-group">
   			 	<label for="exampleFormControlInput1">Телефон:</label>
   			 	<input name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Название новости">
  			</div>


			  <button type="submit" name="myPush" class="btn btn-success">Добавить новость</button>
			
			</form>