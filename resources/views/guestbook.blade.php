<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="token" id="token" value="{{ csrf_token() }}"/>
  <title>Guestbook</title>
  <link rel="stylesheet" href="/css/vendor.css"/>
  <link rel="stylesheet" href="/css/app.css"/>
</head>
<body class="container">

  <div id="guestbook">
    <form action="POST" v-on="submit: onSubmitForm">
      <div class="form-group" {{--v-class="has-error: ! newMessage.name"--}}>
        <label for="name">
          Name
          <span class="error" v-if="! newMessage.name">*</span>
        </label>
        <input v-model="newMessage.name" type="text" name="name" id="name" class="form-control"/>
      </div>

      <div class="form-group" {{--v-class="has-error: ! newMessage.message"--}}>
        <label for="message">
          Message
          <span class="error" v-if="! newMessage.message">*</span>
        </label>
        <textarea v-model="newMessage.message" name="message" id="message" class="form-control"></textarea>
      </div>

      <div class="form-group" v-if="! submitted">
        <button v-attr="disabled: errors" type="submit" class="btn btn-primary">Sign Guestbook</button>
      </div>

      <div class="alert alert-success" v-if="submitted">Thanks !</div>
    </form>

    <hr/>

    <article v-repeat="messages">
      <h3>@{{ name }}</h3>
      <div class="body">@{{ message }}</div>
    </article>

    {{--<div class="debug">
      <pre>
        @{{ $data | json }}
      </pre>
    </div>--}}
  </div>

  <script src="/js/vendor.js"></script>
  <script src="/js/app.js"></script>
</body>
</html>
