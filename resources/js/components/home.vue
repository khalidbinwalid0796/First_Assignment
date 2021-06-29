<template>
    <div>
    <h2>This is home page</h2>
      {{ name }} <br/>
      {{ email }}
      <router-link to="/logout">Logout</router-link>

    </div>

</template>

<script type="text/javascript">
 export default {
  data(){
    return {
      name : localStorage.getItem('name'),
      email : localStorage.getItem('email')
  }
}
 }
</script>
<style type="text/css">

</style>
