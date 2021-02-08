window.app = () => {
	return {

		'islogged': false,
		'token': '',
		'user': {},
		'cardapios': [],

		login(event) {
			if (event && event.detail && event.detail.token) {
				this.token = event.detail.token
				axios.post(`/api/auth/me?token=${this.token}`, {})
					.then(response => {
						this.user = response.data
						this.islogged = true
						this.loadCardapios()
					})
			}
		},

		loadCardapios() {
			axios.get(`/api/cardapios?token=${this.token}`)
				.then(response => {
					this.cardapios = response.data
				})
		}
	}
}

window.loginForm = (loginUrl) => {
	return {

		'email': 'user0@email.com',
		'pw':'password',
		login() {
			axios.post(loginUrl, {
				'email': this.email,
				'password': this.pw
			}).then(response => {
				// usuário logado
				console.log(response.data)
				dispatchEvent(
					new CustomEvent('set-token', {detail: { token: response.data.access_token} })
				)
			}).catch(err_res => {
				//usuário não autenticado
				console.error(err_res)
			})
		}

	}	
}