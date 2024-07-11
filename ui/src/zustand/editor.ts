import { create } from "zustand";

export type Editor = "ace-editor" | "textarea";
interface IEditorState {
    editor: Editor;
    setEditor: (editor: Editor) => void;
    isTextareaEditor: boolean;
    isAceEditor: boolean;
}
const useEditor = create<IEditorState>((set) => ({
    editor: "ace-editor",
    isTextareaEditor: false,
    isAceEditor: true,
    setEditor: (editor: Editor) =>
        set({
            editor,
            isTextareaEditor: editor === "textarea",
            isAceEditor: editor === "ace-editor",
        }),
}));

export default useEditor;
