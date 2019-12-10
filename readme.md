# Quizmate
Quizmate is a thought experiment, attempting to build a REST API and a GraphQL API attached to a single source of data. 

![Imgur](https://i.imgur.com/0x21V50.png)

### Technologies used

- [Laravel](https://laravel.com/)
- [PostgreSQL](https://www.postgresql.org/)
- [GraphQL](https://graphql.org/)
- [Lighthouse](https://lighthouse-php.com/)

### API Usage

#### Questions
**Url:** /api/questions 
    
    value(int): All questions with the requested value.
    
    category(string): All questions in the requested category.

##### Example Query
```
https://quiz-mate-api.herokuapp.com/api/questions?value=100
https://quiz-mate-api.herokuapp.com/api/questions?category=movies
```

#### Categories
**Url:** /api/categories

##### Example Query
```
https://quiz-mate-api.herokuapp.com/api/categories
```

#### GraphQL
**Url:** /GraphQL-playground

##### Example Query 1
```
{
  allCategories {
    name
  }
}
```

##### Example Query 2
``` 
{
  category(id:9) {
    name
  }
}
```

##### Example Query 3
```
{
  category(id:9) {
    name
    questions {
      question_text
      answer_text
      value
  }
}
```

### Lessons Learned
- GraphQL APIs are much more difficult to implement throttling on.  I have been researching some methods to get it done, but the implementation is not as simple as with REST APIs.
- A token based authentication system would have worked well for a project like this.  
- Creating a separate front-end in Vue or React would have made for more simple GraphQL queries.
- If clients were originally using my REST API, it would have been a fiasco, as I changed too much.  I could have approached it with a better solution for versioning such as "test.com/api/v1/questions" which would have made for an easier transition if I had to make a version 2 of the API.

### Final Thoughts
This most important thing I learned through this project is to thoroughly plan before implementing anything. A proper plan would have made building the REST and GraphQL schemas painless.  
