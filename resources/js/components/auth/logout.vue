<template>
</template>

<script type="text/javascript">
 export default { 
  
  created(){
    localStorage.removeItem('token')
    localStorage.removeItem('name')
    localStorage.removeItem('email')
    this.$router.push({ name: '/' })
  }


}
</script>

<style type="text/css">
	
</style>