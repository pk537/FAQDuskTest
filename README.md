# faq


1.git clone https://github.com/pk537/faq.git    
2.CD into FAQ and run composer install  
3.cp .env.example to .env   
4.setup database / with sqlite or other https://laravel.com/docs/5.6/database

#laravel dusk testing

1. **RegistrationTest**:   
 **Test case:** Given username, password and password confirmation, user will be able to register from register page to home page provided that email is not registered before by hitting button `Register`.   
 **Status:** Successful
 
 2. **LoginTest**:    
  **Test case:** Given username and password, user will be able to login provided the user is registered before by hitting button `Login`.    
  **Status:** Successful
 
 3. **QuestionTest:**  
   **Test case:** Registered user should be able to create a question by hitting a button `Create Question` , who will namevigated to `/question/create` page.  
   **Status:** Successful    
   **CreateQuestionTest:**  
   **Status:** Successful   
   **Test case:** User should be able to type a question in section `Body`, then hit a button `Save` to save the question, then the user should be able to see successful message `IN WORKS!` in home page  
   **Status:** Successful         
   **ViewQuestionTest:**  
   **Test case:** By hitting on button `View` in home page, User should be able to view question in `/question/1` page where user an edit question by hitting on button `Edit Question` and save it by hitting button `save`. Also user can delete question by hitting button `Delete`, after which user can see message `Deleted`    
   **Status:** Successful
   
  4. **AnswerTest:**  
  **Test case**: Provided there is a question, user should be able to answer the question in its respective question page, by hitting button `Answer Question`     
  User can type answer in body and hit button `Save` to save the answer , and the user will be able to see message `Saved`   
  User can edit answer by hitting button `Edit Answer` and save by `Save` and see message `Updated`  
  User can delete answer by hitting button `Delete` and see message `Delete`   
  **Status:** Successful
  
  5. **Profile:**  
  **Test case:** New registered user can her create profile by clicking on `My Account`     
  She should be able to see drop down menu which has option `Create profile` , by clicking on that she can give her details like `First Name, Last Name, Body` and save it by hitting button `Save`, and can the see message ` Profile Created`     
  If the user wants to edit her profile, she can click on `My Account`, where she can see `My Profile`, clicking on which she can edit the profile and save it by hitting button `Save` who should then see message `Profile Upated`    
  **Statue:** Successful 
  
   