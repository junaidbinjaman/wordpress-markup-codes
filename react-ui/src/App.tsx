import './App.css'
import {useEffect} from "react";
import Posts from "./components/Posts.tsx";

declare global {
    interface Window {
        wp_data: {
            rest_root: string,
            nonce: string
        }
    }
}

type WPPost = {
    id: number;
    title: { rendered: string };
    excerpt: { rendered: string };
    content: { rendered: string };
};


function App() {
    useEffect(() => {

        (async function() {
            const url = new URL('wp/v2/posts', window.wp_data.rest_root);
            try {
                const response = await fetch(url);

                if (!response.ok) {
                    throw new Error('Something went wrong during api data fetching');
                }

                const data: WPPost = await response.json();

                console.log(data);
            } catch (error) {
                console.log(error)
            }
        })()
    }, []);

    return (
    <>
      <Posts />
    </>
  )
}

export default App
