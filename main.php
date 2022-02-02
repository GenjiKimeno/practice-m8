<!DOCTYPE html> 
 <html lang="en"> 
 <head> 
     <meta charset="UTF-8"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <title>PHP Practice </title> 
     <link rel="stylesheet" href="style.css" /> 
 </head> 
 <body> 
      
     <div class="flex-container"> 
  
         <div class="header">      
                <?php include 'logo.inc.php' ?>          
                <?php include 'menu.inc.php' ?>	    
         </div>        
       
         <div class="about_me"> 
           
           <h1>  <?php  echo $p  ?> </h1> 
  
             <div class="data"> 
                 <div class="myImg"> 
                     <?php  echo '<img src="/img/php.jpg">'; ?>                     
                 </div> 
  
                 <div class="fullname"> 
                     <p> Меня зовут  
                     <?php echo $name, ' ', $surname . '<br>';  
                           echo 'город', ' ', $city; ?>                                       
                     </p>  
             
                     <p> Мне 
                     <?php  echo $age;   ?>           
                     лет </p> 
                     <p> Мы научились создавать переменные </p> 
                     <p> Изучили простые операции с ними </p> 
                 </div> 
             </div> 
  
             <div class="knowledge"> 
                                     
                     <?php  include 'knowledge.inc.php'; ?> 
                     <?php   echo $a, ' ', $b, ' ', $c; ?> <br> 
                                         
                     <?php 
                         $a = 10; 
                         $b = 20; 
                         $c = $a + $b; 
                         echo $c; 
                     ?>   <br>                 
                      <?php 
                         echo $d; 
                     ?>  
  
             </div> 
  
             <div class="article"> 
                 <p class="text"> 
			  		Вычислить путь звезды, и развести сады, и укратить тайфун — все может магия! Есть у меня диплом, 
			  		только вот дело в том, что всемогущий маг — лишь на бумаге я.
			  		Сделать хотел грозу, а получил козу, розовую козу с желтою полосой. Вместо хвоста — нога, 
			  		а на ноге — рога, я не хотел бы вновь встретиться с той козой!
			  		Сделать хотел утюг, слон получился вдруг. Крылья, как у пчелы, вместо ушей — цветы. 
			  		Ночью мне снится сон — плачут коза и слон, плачут и говорят: «Что с нами сделал ты? Что с нами сделал ты?!».
                </p> 
             </div> 
         </div> 
  
             <?php include 'footer.inc.php' ?> 
  
     </div> 
  
  
 </body> 
 </html>