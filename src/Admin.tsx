import Form from "./components/Form.tsx";
import {useState} from "react";

function Admin() {
    const [firstName, setFirstName] = useState<string>('');
    const [lastName, setLastName] = useState<string>('')

    function dataHandler(e: FormEvent<HTMLFormElement>) {
        e.preventDefault();
        console.log(firstName + ' ' + lastName);
    }

    return (
        <div>
            <Form firstName={setFirstName} lastName={setLastName} submitHandler={dataHandler} />
        </div>
    )
}

export default Admin;