import axios from 'axios';
export default function isLoggedIn() {
  async function fetchData() {
    try {
      const url = './isLoggedIn.php';
      const data = {
        message: 'Hello from JavaScript!',
      };
      const response = await axios.post(url, data);

      console.log('Response from PHP script:', response.data);
    } catch (error) {
      console.error('Error:', error);
    }
  }
  fetchData();
}
