<template>
    <div>
        <b-nav-item @click="AllShopsPage">Shops</b-nav-item>
        <b-nav-item @click="AllManagersPage">All Managers</b-nav-item>        
        <b-nav-item @click="createShop">Add Shop</b-nav-item>
        <b-nav-item @click="createManager">Add Manager</b-nav-item>
        <b-nav-item >My Shop</b-nav-item>        
        <b-nav-item @click="logout">Logout</b-nav-item>
        
       
    </div>
</template>

<script>
    export default {
        methods: {
            logout() {
                this.$store.dispatch('SetLoggedOutAction');
                this.$router.push({name: 'Login'});
            },

            AllManagersPage() {
                this.$router.push({ name: 'Managers'})
            },

            AllShopsPage() {
                this.$router.push({ name: 'AllShops'})
            },

            createShop() {
                this.$router.push({name: 'CreateShops' })
            },

            createManager() {
                this.$router.push({name: 'CreateManagers'})
            },

        }
    }
</script>

<style lang="css" scoped>
    div {
        display: flex;
        flex-direction: row;
    }
</style>
