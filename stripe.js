const standartBtn = document.getElementById('standart-ticket')
const vipBtn = document.getElementById('vip-ticket')

const endPoint = 'https://rise-conference.com:3000/create-checkout-session'
standartBtn.addEventListener('click', async () => {
	try {
		const res = await fetch(endPoint, {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json'
			},
			body: JSON.stringify({
				items: [{id: 1}]
			})
		})
		const {url} = await res.json();
		window.location = url
	} catch (e) {
		console.error(e.error)
		alert(e.error)
	}

})
vipBtn.addEventListener('click', async () => {
	try {
		const res = await fetch(endPoint, {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json'
			},
			body: JSON.stringify({
				items: [{id: 2}]
			})
		})
		const {url} = await res.json();
		window.location = url
	} catch (e) {
		console.error(e.error)
		alert(e.error)
	}

})