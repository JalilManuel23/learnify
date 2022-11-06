import axios from 'axios';

// Put your backend url here
export const API_URL = `http://127.0.0.1:8000/api`

const $api = axios.create({
    withCredentials: true,
    baseURL: API_URL
})

$api.interceptors.request.use((config) => {
    config.headers.Authorization = `Bearer ${localStorage.getItem('token')}`
    return config;
})


export default $api;