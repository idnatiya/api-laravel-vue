<template>
	<div>
		<h1>Edit Movie</h1>
		<form @submit.prevent="update()">
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
		created() {
			this.load(); 
		}, 
		methods: {
			load() {
				axios.get(`${BASE_API_URL}/movies/${this.$route.params.id}/edit`)
					.then(response => {
						this.form.title = response.data.title;
						this.form.description = response.data.description; 
					}); 
			}, 
			update() {
				axios.put(`${BASE_API_URL}/movies/${this.$route.params.id}`, {
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