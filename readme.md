# Quizmate

### Introduction
Quizmate is a thought experiment, attempting to build a REST API and a GraphQL API attached to a single source of data. 

### Lessons Learned
- GraphQL APIs are much more difficult to implement throttling on.  I have been researching some methods to get it done, but the implementation is not as simple as with REST APIs.
- A token based authentication system would have worked well for a project like this.  
- Creating a separate front-end in Vue or React would have made for more simple GraphQL queries.
- If clients were originally using my REST API, it would have been a fiasco, as I changed too much.  I could have approached it with a better solution for versioning such as "test.com/api/v1/questions" which would have made for an easier transition if I had to make a version 2 of the API.

### Final Thoughts
This most important thing I learned through this project is to thoroughly plan before implementing anything. A proper plan would have made building the REST and GraphQL schemas painless.  
