<template>
  <div id="app">
    <!-- du lieu ban dau
    <div class="list-blog">
      <div class="bloag" key="abc">
        <div class="title">aaa</div>
        <div class="description">111111</div>
      </div>
      <div class="bloag" key="abc">
        <div class="title">aaa</div>
        <div class="description">111111</div>
      </div>
      <div class="bloag" key="abc">
        <div class="title">aaa</div>
        <div class="description">111111</div>
      </div>
    </div> -->
    <!-- du lieu bang ngon ngu Vue -->
    <ul id ="example-2">
      <li v-for="(item, index) in items">
        {{parentMessage}} - {{index}} - {{item.title}} - {{item}}
      </li>
    </ul>
  </div>
</template>



