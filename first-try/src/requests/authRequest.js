import axios from "axios";
import {url} from "../main.js";

const loginUser = async (email, password) => {
        return  await axios.post(`${url}/login`, {
            email,
            password
        })
            .then(response => {
                console.log('Успешный вход: '  ,response.data)
                return response.data
            })
            .catch(error => {
                console.error('Ошибка авторизации ', error)
                throw new Error('что-то не верно')
            })
}

export default loginUser;