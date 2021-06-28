<template>
  <div>
	 <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form @submit.prevent="login">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address"  autofocus="autofocus" v-model="form.email">
              <small class="text-danger"  style="color: red;"> </small>
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" v-model="form.password">
              <small class="text-danger" >  </small>
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
         <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
          <router-link to="" class="d-block small mt-3">Register an Account</router-link>
        </div>
      </div>
    </div>
  </div>
  </div>
</template>

<script type="text/javascript">
 export default { 
   data(){
    return {
      form:{
        email: null,
        password: null

      },
      errors:{},
    }
  },
  methods:{
    login(){
      axios.post('/api/auth/login',this.form)
      this.$router.push({ name : 'home'})
      .catch(error => this.errors = error.response.data.errors)
    }
  }
}
</script>