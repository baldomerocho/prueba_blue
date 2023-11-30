interface ApiClient{
    get: (url: string) => Promise<any>
    post: (url: string, body: any) => Promise<any>
    put: (url: string, body: any) => Promise<any>
    delete: (url: string) => Promise<any>
}

class ApiClientImpl implements ApiClient{
    private readonly baseUrl: string

    constructor(baseUrl: string){
        this.baseUrl = baseUrl
    }

    async get(url: string): Promise<any>{
        const response = await fetch(`${this.baseUrl}${url}`, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            }
        })

        return await response.json()
    }

    async post(url: string, body: any): Promise<any>{
        const response = await fetch(`${this.baseUrl}${url}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(body)
        })

        return await response.json()
    }

    async put(url: string, body: any): Promise<any>{
        const response = await fetch(`${this.baseUrl}${url}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(body)
        })

        return await response.json()
    }

    async delete(url: string): Promise<any>{
        const response = await fetch(`${this.baseUrl}${url}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json'
            }
        })

        return await response.json()
    }
}

export default ApiClientImpl