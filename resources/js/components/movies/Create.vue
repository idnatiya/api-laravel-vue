<template>
	<div>
		<h1>Create New Movie</h1>
		<form @submit.prevent="store()">
			<div class="card">
				<div class="card-header">
					<router-link class="btn btn-sm btn-primary" to="/">&laquo; Back </router-link>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Title</label>
						<input type="text" class="form-control" placeholder="Enter movie title" v-model="form.title" required>
					</div>
					<div class="form-group">
						<label>Description</label>
						<input type="text" class="form-control" placeholder="Enter description" v-model="form.description" required>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</form>
	</div>
</template>

<script type="text/javascript">
	
	export default {
		data() {
			return {
				form: {
					title: '', 
					description: ''
				}
			}
		},
		methods: {
			store() {
				axios.post(`${BASE_API_URL}/movies`, {
					title: this.form.title, 
					description: this.form.description
				})
				.then(response => {
					this.$router.push('/'); 
				}); 
			}
		}
	}

</script>